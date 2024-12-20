<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('/beranda', function(){
        return view('admin.beranda', ['title' => 'Beranda']);
    });
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