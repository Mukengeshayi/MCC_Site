<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    public function run(): void
    {
        School::create([
            'adresse' => '146-150, Route Bypass, Q/ Pumbu, C/ Mont-Ngafula',
            'telephone' => '+243 810 000 971',
            'email' => 'info@messiahchristiancollege.com',
            'social_links' => [
                'facebook' => 'https://www.facebook.com/profile.php?id=61578662350805',
                'instagram' => 'https://www.instagram.com/ecolemessiahchristianmcc1?igsh=N3IybTFicHlkc2V4',
                'linkedin' => 'https://www.linkedin.com/feed/update/urn:li:activity:7358932188370726913',
                'tiktok' => 'https://www.tiktok.com/@messiah.christian'
            ]
        ]);
    }
}
