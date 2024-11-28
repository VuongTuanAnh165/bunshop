<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Vương Tuấn Anh',
            'email' => 'vuongtuananh165@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'),
            'phone' => '1234567890',
            'image' => null,
            'cover_image' => null,
            'bio' => 'This is a short bio about John Doe.',
            'website' => 'https://johndoe.com',
            'role' => 1, // Example role
            'gender' => 1, // 1: Male, 2: Female, 0: Other
            'birthday' => '1980-01-01',
            'facebook' => 'https://facebook.com/johndoe',
            'twitter' => 'https://twitter.com/johndoe',
            'instagram' => 'https://instagram.com/johndoe',
            'linkedin' => 'https://linkedin.com/in/johndoe',
            'github' => 'https://github.com/johndoe',
            'facebook_id' => null,
            'google_id' => null,
            'zalo_id' => null,
            'apple_id' => null,
            'timezone' => 'UTC',
            'language' => 'en',
            'currency' => 'USD',
            'status' => 1, // ACTIVE
            'blocked_at' => null,
            'block_reason' => null,
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
