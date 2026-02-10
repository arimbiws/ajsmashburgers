<?php

namespace Database\Seeders;

use App\Models\CompanyProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class CompanyProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CompanyProfile::create([
            'about_us' => 'AJ Smash Burger adalah pelopor burger smash berkualitas di Bali yang menghadirkan cita rasa autentik dengan bahan-bahan lokal pilihan. Didirikan sejak 2023, kami berkomitmen menyajikan kelezatan di setiap gigitan.',
            'vision' => 'Menjadi brand burger lokal nomor satu yang dikenal akan kualitas dan pelayanan prima.',
            'mission' => 'Menyajikan burger berkualitas tinggi dengan harga terjangkau dan memberikan pengalaman kuliner yang menyenangkan.',
            'address_main' => 'Jl. Uluwatu II No.88X, Jimbaran, Kec. Kuta Sel., Kabupaten Badung, Bali 80361',
            'phone_main' => '6281234567890',
            'email_main' => 'info@ajsmashburger.com',
            'link_instagram' => 'https://www.instagram.com/ajsmashburger/',
            'link_maps_main' => 'https://maps.app.goo.gl/cspHvg3HYztrSJpCA',
            'logo' => 'company/logo-default.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
