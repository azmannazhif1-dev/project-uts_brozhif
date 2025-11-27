<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BookingController;

Route::get('/', function () {
    return redirect()->route('login');
});

// login routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->name('login.process');

// logout route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// proteksi booking
Route::middleware('auth')->group(function () {
    Route::resource('bookings', BookingController::class);
});
