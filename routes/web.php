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
    Route::get('/layanan-pengguna/{id}', [LayananPenggunaController::class, 'show']);
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/auth/google', function () {
    return Socialite::driver('google')->redirect();
})->name('google.login');

Route::get('/auth/google/callback', function () {
    try {
        $user = Socialite::driver('google')->user();
    } catch (\Exception $e) {
        return redirect('/')->with('error', 'Login menggunakan Google gagal.');
    }

    //cari atau buat user dari informasi google
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
            // informasi tambahan 
        ]);
        Auth::login($newUser);
    }

    return redirect()->intended('/');
})->name('google.callback');
