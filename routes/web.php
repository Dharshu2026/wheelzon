<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\LoginController;


Route::get('/', function () {
    return view('index');  
})->name('home'); 



Route::middleware('auth')->group(function () {
    Route::get('/book', [BookingController::class, 'create'])->name('book.create');
    Route::post('/book', [BookingController::class, 'store'])->name('book.store');
});


// Contact routes
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');


// Auth Routes
Auth::routes();

// Public Routes
Route::get('/', function () { return view('index'); })->name('home');
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/services', function () { return view('services'); })->name('services');
Route::get('/bikes', [CarController::class, 'index'])->name('bikes');




Route::get('/admin/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth', 'can:access-admin-area') 
    ->name('admin.dashboard');


Route::get('/user/dashboard', [UserDashboardController::class, 'index'])
    ->middleware('auth')
    ->name('user.dashboard');