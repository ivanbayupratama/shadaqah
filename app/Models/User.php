<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // Jika Anda ingin menyertakan nama tabel, pastikan menggunakan 'users'
    protected $table = 'users';

    // Kolom yang bisa diisi (mass assignable)
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Menyembunyikan kolom tertentu saat data dikembalikan sebagai JSON
    protected $hidden = [
        'password',
    ];
}
