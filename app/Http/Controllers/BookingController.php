<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingMail;
use Illuminate\Support\Facades\Notification;
use App\Notifications\SlackNotification;

class BookingController extends Controller
{
    public function Index()
    {
        return view('book');
    }

    public function BookingEmail(Request $request)
    {
        $validated = $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'car_type' => 'required',
            'pickup_location' => 'required',
            'passengers' => 'required',
            'dropoff_location' => 'required',
            'luggage' => 'required',
            'date' => 'required',
            'time' => 'required',
        ]);
        try {
            // Honeypot to prevent bots
            if (!empty($request->honey_pot)) {
                Log::info('Honeypot triggered: Potential bot submission detected.');
                return redirect()->back()->with('error', 'Bot activity detected.');
            }

            $data = [
                'name' => $request->fullname,
                'email' => $request->email,
                'number' => $request->phone,
                'car_type' => $request->car_type,
                'pickup' => $request->pickup_location,
                'passenger' => $request->passengers,
                'dropoff' => $request->dropoff_location,
                'luggage' => $request->luggage,
                'date' => $request->date,
                'time' => $request->time,
                'message' => $request->notes,
            ];

            Log::info('Booking Form Data:', $data);

            // Send Email using correct Mailable class
            Mail::to(config('mail.from.address'))->send(new BookingMail($data));

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