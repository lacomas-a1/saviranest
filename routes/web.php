<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

//Home Page
Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/stays', 'stays')->name('stays');
    Route::get('/experiences', 'experiences')->name('experiences');
    Route::get('/pricing', 'pricing')->name('pricing');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/booking', 'booking')->name('booking');
    Route::get('/exp-details', 'expdetails')->name('expdetails');
    Route::get('/stay-details', 'staydetails')->name('staydetails');
    Route::get('/acc-details', 'accdetails')->name('accdetails');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/signin', 'signin')->name('signin');
    Route::get('/signup', 'signup')->name('signup');
    Route::get('/forget-password', 'forget')->name('forget');
    Route::get('/logout', 'logout')->name('logout');
});
