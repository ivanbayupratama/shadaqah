<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BerandaController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('/beranda', [BerandaController::class, 'index']);
    Route::get('/beranda/{id}', [BerandaController::class, 'show']);
    Route::get('/beranda/{id}/pencairan-dana', [BerandaController::class, 'pencairan']);
    
    Route::get('/compaign', function(){
        return view('admin.compaign', ['title' => 'Compaign/Event']);
    });
    Route::get('/riwayat-donasi', function(){
        return view('admin.riwayat-donasi', ['title' => 'Riwayat Donasi']);
    });
    Route::get('/pencairan-dana', function(){
        return view('admin.pencairan-dana', ['title' => 'Pencairan Dana']);
    });
    Route::get('/pencairan-dana/metode-pencairan', function(){
        return view('admin.metode-pencairan', ['title' => 'Metode Pencairan']);
    }); 
});