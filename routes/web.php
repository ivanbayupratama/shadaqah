<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'authenticate'])->name('login');