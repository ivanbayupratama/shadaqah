<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WebController;

Route::get('/', [WebController::class, 'home'])->name('home');



Route::get('/about', [WebController::class, 'about'])->name('about');

Route::get('/contact', [WebController::class, 'contact'])->name('contact');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.show');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'showRegistForm'])->name('register.show');
Route::post('/register', [AuthController::class, 'register'])->name('register');
