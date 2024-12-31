<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\CampaignController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [WebController::class, 'about'])->name('about');
Route::get('/contact', [WebController::class, 'contact'])->name('contact');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.show');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'showRegistForm'])->name('register.show');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login/google', [AuthController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [AuthController::class, 'handleGoogleCallback'])->name('login.google.callback');

Route::post('/donate/{campaign}', [DonationController::class, 'donate'])->name('donate');

Route::get('/campaigns/{campaign}/donate', [DonationController::class, 'showDonationForm'])->name('donation.form');
Route::post('/campaigns/{campaign}/donate', [DonationController::class, 'donate'])->name('donation.store');

Route::get('/campaigns', [CampaignController::class, 'index']);
Route::post('/campaigns', [CampaignController::class, 'store'])->middleware('auth');

Route::get('/campaign/new', function () {
    return view('campaign');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
