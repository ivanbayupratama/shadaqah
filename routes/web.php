<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BerandaController;
use App\Http\Controllers\Admin\CompaignController;
use App\Http\Controllers\Admin\RiwayatDonasiController;
use App\Http\Controllers\Admin\PencairanDanaController;
use App\Http\Controllers\Admin\LayananPenggunaController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('/beranda', [BerandaController::class, 'index']);
    Route::get('/beranda/{id}', [BerandaController::class, 'show']);
    Route::get('/beranda/{id}/pencairan-dana', [BerandaController::class, 'pencairan']);

    Route::get('/compaign', [CompaignController::class, 'index']);
    Route::get('/compaign/create', [CompaignController::class, 'create']);
    Route::get('/compaign/{id}/edit', [CompaignController::class, 'edit']);

    Route::get('/riwayat-donasi', [RiwayatDonasiController::class, 'index']);
    Route::get('/riwayat-donasi/{id}', [RiwayatDonasiController::class, 'show']);
    Route::get('/riwayat-donasi/{id}/pencairan-dana', [RiwayatDonasiController::class, 'pencairan']);
    
    Route::get('/pencairan-dana', [PencairanDanaController::class, 'index']);
    Route::get('/pencairan-dana/metode-pencairan', [PencairanDanaController::class, 'pencairan']); 
    
    Route::get('/layanan-pengguna', [LayananPenggunaController::class, 'index']);
});