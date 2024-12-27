<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BerandaController;
use App\Http\Controllers\Admin\CompaignController;
use App\Http\Controllers\Admin\RiwayatDonasiController;

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
    
    Route::get('/pencairan-dana', function(){
        return view('admin.pencairan-dana', ['title' => 'Pencairan Dana']);
    });
    Route::get('/pencairan-dana/metode-pencairan', function(){
        return view('admin.metode-pencairan', ['title' => 'Metode Pencairan']);
    }); 
});