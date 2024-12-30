<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WebController;

Route::get('/', [WebController::class, 'home'])->name('home');



Route::get('/about', [WebController::class, 'about'])->name('about');

Route::get('/contact', [WebController::class, 'contact'])->name('contact');


Route::get('/login', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'authenticate'])->name('login');

Route::get('/register', function () {
    return view('registrasi'); // Mengarahkan ke halaman registrasi
})->name('register');
