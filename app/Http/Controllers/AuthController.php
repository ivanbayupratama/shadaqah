<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function showRegistForm()
    {
        return view('registrasi');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Simpan pengguna ke database
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Login pengguna setelah registrasi berhasil
        Auth::login($user);

        // Redirect ke login page with success message
        return redirect('/login')->with('success', 'Registrasi berhasil!');
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);


        if (Auth::attempt($credentials)) {
            // regenerate session when login was successful
            $request->session()->regenerate();

            //Retrieve current user
            $user = Auth::user();

            // check user roles and redirect to according dashboard
            if ($user->role == 'admin') {

                // Redirect to admin dashboard with success message
                return redirect()->intended('/admin/beranda')->with('success', 'Selamat datang Admin!');
            } else {
                // Redirect to home page with success message
                return redirect()->intended('/')->with('success', 'Selamat Datang!');
            }
        }


        // Authentication failed, redirect back with error message (with errors key named 'login')
        return redirect()->back()->withErrors(['login' => 'Email or Password was incorrect'])->withInput();
    }



    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect('/')->with('error', 'Login menggunakan Google gagal.');
        }

        // Temukan atau buat pengguna berdasarkan informasi Google
        $authUser = User::firstOrCreate([
            'email' => $user->email,
        ], [
            'name' => $user->name,
            'provider' => 'google',
            'provider_id' => $user->id,
            'avatar' => $user->avatar,
            'password' => Hash::make(Str::random(16)), // Mengisi kolom password dengan nilai acak
        ]);

        Auth::login($authUser, true);

        return redirect()->intended('/')->with('success', 'Login Success!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Anda telah berhasil logout');
    }
}
