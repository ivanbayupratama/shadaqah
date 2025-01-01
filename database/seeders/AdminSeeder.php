<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $adminEmail1 = 'admin@example.com';
        $adminEmail2 = 'tonystark@gmail.com';

        // Cek jika pengguna dengan email admin pertama sudah ada
        if (!User::where('email', $adminEmail1)->exists()) {
            User::create([
                'name' => 'Admin Name',
                'email' => $adminEmail1,
                'password' => Hash::make('password'),
                'role' => 'admin',
            ]);
        } else {
            echo "Admin with email $adminEmail1 already exists.\n";
        }

        // Cek jika pengguna dengan email admin kedua sudah ada
        if (!User::where('email', $adminEmail2)->exists()) {
            User::create([
                'name' => 'Tony Stark',
                'email' => $adminEmail2,
                'password' => Hash::make('tony123'),
                'role' => 'admin',
            ]);
        } else {
            echo "Admin with email $adminEmail2 already exists.\n";
        }
    }
}
