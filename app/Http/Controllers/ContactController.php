<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Notification;
use App\Notifications\SlackNotification;

class ContactController extends Controller
{
    public function Index()
    {
        return view('contact');
    }

    public function ContactEmail(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'number' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        try {
            // Honeypot to prevent bots
            if (!empty($request->honey_pot)) {
                Log::info('Honeypot triggered: Potential bot submission detected.');
                return redirect()->back()->with('error', 'Bot activity detected.');
            }

            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'number' => $request->number,
                'subject' => $request->subject,
                'message' => $request->message,
            ];

            Log::info('Contact Form Data:', $data);

            // Send Email using correct Mailable class
            Mail::to(config('mail.from.address'))->send(new ContactMail($data));

            return redirect()->back()->with('success', 'Thank you for your booking! We\'ll get back to you as soon as possible.');
        } catch (\Exception $e) {
            Log::error('Booking Form Submission Failed: ' . $e->getMessage());

            $webhook = env('APP_ENV') === 'local' ? env('SLACK_LOCAL_WEB_HOOK') : env('SLACK_PRODUCTION_WEB_HOOK');

            if ($webhook) {
                Notification::route('slack', $webhook)->notify(new SlackNotification($e->getMessage()));
            }

            return redirect()->back()->with('error', 'Something went wrong. Please try again later.');
        }
    }
}
