<?php

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BerandaController;
use App\Http\Controllers\Admin\CompaignController;
use App\Http\Controllers\Admin\RiwayatDonasiController;
use App\Http\Controllers\Admin\PencairanDanaController;
use App\Http\Controllers\Admin\LayananPenggunaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DataUsersController;

// Rute umum
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [WebController::class, 'about'])->name('about');
Route::get('/contact', [WebController::class, 'contact'])->name('contact');

// Rute autentikasi
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.show');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegistForm'])->name('register.show');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Rute login menggunakan Google
Route::get('/login/google', [AuthController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [AuthController::class, 'handleGoogleCallback'])->name('login.google.callback');

// Rute donasi
// Route::post('/donate/{campaign}', [DonationController::class, 'donate'])->name('donate');
// Route::get('/campaigns/{campaign}/donate', [DonationController::class, 'showDonationForm'])->name('donation.form');
// Route::post('/campaigns/{campaign}/donate', [DonationController::class, 'donate'])->name('donation.store');

// Rute admin dengan middleware
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/beranda', [BerandaController::class, 'index']);
    Route::get('/beranda/{id}', [BerandaController::class, 'show']);
    Route::get('/beranda/{id}/pencairan-dana', [BerandaController::class, 'pencairan']);
    Route::get('/compaign', [CompaignController::class, 'index']);
    Route::get('/compaign/create', [CompaignController::class, 'create']);
    Route::post('/compaign/create', [CompaignController::class, 'store']);
    Route::get('/compaign/{id}/edit', [CompaignController::class, 'edit'])->name('admin.compaign.edit');
    Route::put('/compaign/update/{id}', [CompaignController::class, 'update']);
    Route::get('/compaign/{id}/delete', [CompaignController::class, 'delete']);
    Route::get('/compaign/search', [CompaignController::class, 'search'])->name('compaign.search');
    Route::get('/riwayat-donasi', [RiwayatDonasiController::class, 'index']);
    Route::get('/riwayat-donasi/{id}', [RiwayatDonasiController::class, 'show']);
    Route::get('/riwayat-donasi/{id}/pencairan-dana', [RiwayatDonasiController::class, 'pencairan']);
    Route::get('/pencairan-dana', [PencairanDanaController::class, 'index']);
    Route::get('/pencairan-dana/metode-pencairan', [PencairanDanaController::class, 'pencairan']);
    Route::get('/layanan-pengguna', [LayananPenggunaController::class, 'index']);
    Route::get('/layanan-pengguna/{id}', [LayananPenggunaController::class, 'show']);
    Route::get('/dataUsers', [DataUsersController::class, 'index'])->name('admin.dataUsers.index');
});

// Rute PDF Reporting
Route::get('/admin/dataUsers/pdf', [DataUsersController::class, 'exportPdf'])->name('admin.dataUsers.pdf');
Route::get('/admin/compaigns/pdf', [CompaignController::class, 'exportPdf'])->name('admin.campaign.pdf');


// Rute callback autentikasi Google yang tidak terlindungi
Route::get('/auth/google', function () {
    return Socialite::driver('google')->redirect();
})->name('google.login');

Route::get('/auth/google/callback', function () {
    try {
        $user = Socialite::driver('google')->user();
    } catch (\Exception $e) {
        return redirect('/')->with('error', 'Login menggunakan Google gagal.');
    }

    // Cari atau buat user dari informasi Google
    $existingUser = User::where('email', $user->email)->first();
    if ($existingUser) {
        Auth::login($existingUser);
    } else {
        $newUser = User::create([
            'name' => $user->name,
            'email' => $user->email,
            'google_id' => $user->id,
            'avatar' => $user->avatar,
            'avatar_original' => $user->avatar_original,
            // Informasi tambahan
        ]);
        Auth::login($newUser);
    }

    return redirect()->intended('/');
})->name('google.callback');
