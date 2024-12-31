<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Campaign;

class CampaignSeeder extends Seeder
{
    public function run()
    {
        Campaign::create([
            'title' => 'Musibah banjir Afghanistan',
            'description' => 'Penggalangan dana untuk bantuan korban banjir di Afghanistan.',
            'image' => 'assets/banner/banner1.jpg',
            'user_id' => 1, // Sesuaikan dengan ID user yang ada
        ]);
    }
}
