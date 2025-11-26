<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('index');
});

Route::get('/book-online', [BookingController::class, 'Index'])-> name('book');
Route::post('/booking', [BookingController::class, 'BookingEmail'])->name('booking.submit');

Route::get('about-us', function () {
    return view('about');
})->name('about');

Route::get('our-services', function () {
    return view('services');
})->name('services');

Route::get('our-services', function () {
    return view('services');
})->name('services');

Route::get('/contact-us', [ContactController::class, 'Index'])-> name('contact');
Route::post('/contact', [ContactController::class, 'ContactEmail'])->name('contact.submit');