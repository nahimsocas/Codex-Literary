<?php

use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'home')->name('home');
Route::view('/home', 'home');

Route::controller(CreateController::class)->middleware('verified')->group(function() {
    Route::get('/create', 'index')->name('create');
});

Route::view('/login', 'login')->name('login');
Route::view('/register', 'register')->name('register');
Route::view('email/verify', 'show')->name('verification.notice');

Route::view('/terms', 'terms')->name('terms');
Route::view('/privacy', 'privacy')->name('privacy');

Route::controller(ContactController::class)->group(function() {
    Route::get('/contact', 'index')->name('contact');
    Route::post('/contact', 'store');
});

Auth::routes(['verify' => true]);
