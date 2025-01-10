<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    use HasFactory;

    //jika ingin menyertakan nama tabel, pastikan pakai 'users'
    protected $table = 'users';

    //kolom yang bisa diisi (mass assignable)
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'provider',
        'provider_id',
        'avatar',

    ];

    // mnyembunyikan kolom tertentu saat data dikembalikan sebagai JSON
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
