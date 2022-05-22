<?php

use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CreateBasicController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\CreateIntermediateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StoreController;
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

Route::controller(LibraryController::class)->group(function() {
    Route::get('/library', 'index')->name('library.index');
    Route::get('/library/{url}', 'show')->name('library.show');
});

Route::view('/store', 'store.index')->name('store.index');
Route::controller(StoreController::class)->group(function() {
    Route::get('/store/cart', 'index')->name('store.cart');
    Route::post('/store/cart', 'store')->name('store.store');
    Route::delete('/store/cart/{id}', 'destroy')->name('cart.delete');
});
Route::controller(PaymentController::class)->middleware(['auth', 'verified'])->group(function() {
    Route::get('/store/cart/payment', 'index')->name('store.payment');
});


Route::controller(CreateBasicController::class)->middleware(['auth', 'verified'])->group(function() {
    Route::get('/create', 'index')->name('create.index');
    Route::get('/create/new-story', 'create')->name('create.create');
    Route::get('/create/{url}/edit', 'edit')->name('create.edit');
    Route::patch('/create/{update}', 'update')->name('create.update');
    Route::post('/create', 'store')->name('create.store');
});

Route::controller(CreateIntermediateController::class)->middleware(['auth', 'verified'])->group(function() {
    Route::get('/create/{url}/view', 'index')->name('create.archive');
    Route::get('/create/{url}/new-chapter', 'create')->name('create.chapter');
    Route::get('/create/{url}/{id}/{type}/edit', 'edit')->name('create.chapteredit');
    Route::patch('/create/{url}/view', 'update')->name('create.chapterupdate');
    Route::post('/create/{url}/view', 'store')->name('create.chapterstore');
});

Route::view('/login', 'login')->name('login');
Route::view('/register', 'register')->name('register');
Route::view('email/verify', 'show')->name('verification.notice');

Route::view('/about-us', 'about')->name('about-us');
Route::view('/terms', 'terms')->name('terms');
Route::view('/privacy', 'privacy')->name('privacy');

Route::controller(ContactController::class)->group(function() {
    Route::get('/contact', 'index')->name('contact');
    Route::post('/contact', 'store');
});

Auth::routes(['verify' => true]);
