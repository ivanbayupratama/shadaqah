<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WebController;

// Route untuk halaman Home
Route::get('/', [WebController::class, 'home'])->name('home');

// Route untuk halaman About
Route::get('/about', [WebController::class, 'about'])->name('about');

// Route untuk halaman Contact
Route::get('/contact', [WebController::class, 'contact'])->name('contact');

// Route untuk login
Route::get('/login', function () {
    return view('login');
})->name('login'); // Nama route login sudah jelas

Route::post('/login', [AuthController::class, 'authenticate'])->name('login.post');

// Route untuk registrasi
Route::get('/register', function () {
    return view('registrasi'); // Mengarahkan ke halaman registrasi
})->name('register');

// Jika perlu autentikasi untuk halaman yang lain
// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// });
