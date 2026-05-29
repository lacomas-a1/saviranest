<?php

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\auth\GoogleAuthController;
use App\Http\Controllers\page\AdminController;
use App\Http\Controllers\page\PageController;
use App\Http\Controllers\v1\accomodation\RoomsController;
use App\Http\Controllers\v1\accomodation\StaysController;
use App\Http\Controllers\v1\experience\ExperienceController;
use App\Http\Controllers\v1\guest\GuestsController;
use App\Http\Controllers\v1\host\BusinessController;
use App\Http\Controllers\v1\tabs\GalleryController;
use App\Http\Controllers\v1\tabs\HighlightController;
use Illuminate\Support\Facades\Route;

// Home Page
Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/stays', 'stays')->name('stays');
    Route::get('/experiences', 'experiences')->name('experiences');
    Route::get('/pricing', 'pricing')->name('pricing');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/booking', 'booking')->name('booking');
    Route::get('/experience/{id}', 'viewExperience')->name('experience.show');
    Route::get('/exp-details', 'expdetails')->name('expdetails');
    Route::get('/stay/{id}', 'viewStay')->name('stay.show');
    Route::get('/stay-details', 'staydetails')->name('staydetails');
    Route::get('/acc-details', 'accdetails')->name('accdetails');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/signin', 'signin')->name('login');
    Route::get('/signup', 'signup')->name('signup');
    Route::get('/forget-password', 'forget')->name('forget');
    Route::post('/logout', 'logout')->name('logout');
});

Route::controller(GoogleAuthController::class)->group(function () {
    Route::get('/auth/google', 'redirect')->name('google.login');
    Route::get('/auth/google/callback', 'callback');
});

Route::controller(BusinessController::class)->middleware('auth')->group(function () {
    Route::get('/business/setup', 'businessSetup')->name('business.setup');
    Route::post('/business/setup', 'storeSetup')->name('business.setup.store');
});

Route::controller(AdminController::class)->middleware('auth')->group(function () {
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/accomodation', 'accomodation')->name('accomodation');
    Route::get('/experience', 'experience')->name('experience');
    Route::get('/bookings', 'bookings')->name('bookings');
    Route::get('/guest', 'guest')->name('guest');
    Route::get('/transaction', 'transaction')->name('transaction');
    Route::get('/report', 'report')->name('report');
    Route::get('/expr-details', 'exprdetails')->name('exprdetails');
    Route::get('/acc-details', 'accdetails')->name('accdetails');
    Route::get('/view/stay{id}', 'viewStayID')->name('view.stay.id');
});

Route::middleware('auth')->group(function () {
    Route::resource('businesses/stays', StaysController::class);
    Route::resource('businesses/experience', ExperienceController::class);
    Route::resource('businesses/guests', GuestsController::class);
    Route::resource('businesses/rooms', RoomsController::class);
    Route::resource('businesses/highlight', HighlightController::class);
    Route::resource('businesses/gallery', GalleryController::class);
});