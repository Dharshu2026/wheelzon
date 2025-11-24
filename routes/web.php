<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserDashboardController;

// Authentication routes
Auth::routes();

// Admin dashboard
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

// User dashboard (protected)
Route::get('/user/dashboard', [UserDashboardController::class, 'index'])
    ->middleware('auth')
    ->name('user.dashboard');

// Public pages
Route::get('/', function () {
    return view('index');  // Homepage shown to everyone
})->name('home');

Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/services', function () { return view('services'); })->name('services');
Route::get('/pricing', function () { return view('pricing'); })->name('pricing');
Route::get('/bikes', [CarController::class, 'index'])->name('bikes');

// Booking routes


Route::get('/book', [BookingController::class, 'create'])->name('book.create');
Route::post('/book', [BookingController::class, 'store'])->name('book.store');


// Contact routes
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
