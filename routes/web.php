<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CarController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserDashboardController;

Route::get('/admin/dashboard', [DashboardController::class, 'index']);

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

Route::get('/user/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');


use Illuminate\Support\Facades\Auth;

Route::get('/admin/change-password', function() {
    $user = \App\Models\User::where('admin', 1)->first();
    $user->password = bcrypt('admin@123'); // new password
    $user->save();
    return 'Admin password updated!';
});


Auth::routes();

Route::get('/user/dashboard', [App\Http\Controllers\UserDashboardController::class, 'index'])
    ->middleware('auth')
    ->name('user.dashboard');

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/bikes', [CarController::class, 'index'])->name('bikes');

// Booking routes
Route::get('/book', [BookingController::class, 'create'])->name('book');


Route::post('/book', [BookingController::class, 'store'])->name('book.store'); // save booking

// Contact routes
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

