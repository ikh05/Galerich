<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\SocialMedia;
use App\Models\SocialMediaPlatfrom;
use App\Models\Image;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'username' => 'humi',
            'name' => 'ST Humaira',
            'email' => 'sthumaira@gmail.com',
            'password' => bcrypt('123'),
            'identitas' => 'Selalu mencintai Icang!'

        ]);
        User::create([
            'username' => 'ikhsan_05',
            'name' => 'Muhammad Ikhsan',
            'email' => 'muhammadikhsan3370@gmail.com',
            'password' => bcrypt('123'),
            'identitas' => 'Berusaha menjadi lebih baik dari hari kemaren. Untuk menjadi orang yang pantas untuk Acing!'
        ]);

        SocialMediaPlatfrom::create([
            'name' => 'Instagram',
            'url' => 'https://www.instagram.com/',
            'icon' => 'bi bi-instagram'
        ]);
        SocialMediaPlatfrom::create([
            'name' => 'Facebook',
            'url' => 'https://www.facebook.com/',
            'icon' => 'bi bi-facebook'
        ]);
        SocialMediaPlatfrom::create([
            'name' => 'X',
            'url' => 'https://www.x.com/',
            'icon' => 'bi bi-twitter-x'
        ]);
        

        SocialMedia::create([
            'user_id' => 1,
            'social_media_platform_id' => 1,
            'name' => 'humii05',
            'url' => 'humii05'
        ]);
        SocialMedia::create([
            'user_id' => 2,
            'social_media_platform_id' => 1,
            'name' => 'm_ikhsann05',
            'url' => 'm_ikhsann05'
        ]);
        SocialMedia::create([
            'user_id' => 2,
            'social_media_platform_id' => 2,
            'name' => 'muhammadikhsan',
            'url' => 'ikhsan'
        ]);



        Image::create([
            'user_id' => 2,
            'href' => 'c (1).jpg',
            'name' => ''
        ]);
        Image::create([
            'user_id' => 2,
            'href' => 'c (2).jpg',
            'name' => ''
        ]);
        Image::create([
            'user_id' => 2,
            'href' => 'c (3).jpg',
            'name' => ''
        ]);
        Image::create([
            'user_id' => 2,
            'href' => 'c (4).jpg',
            'name' => ''
        ]);
        Image::create([
            'user_id' => 2,
            'href' => 'c (5).jpg',
            'name' => ''
        ]);
        Image::create([
            'user_id' => 1,
            'href' => 'c (6).jpg',
            'name' => ''
        ]);
        Image::create([
            'user_id' => 2,
            'href' => 'c (7).jpg',
            'name' => ''
        ]);
        Image::create([
            'user_id' => 2,
            'href' => 'c (8).jpg',
            'name' => ''
        ]);
        

    }
}
