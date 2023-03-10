<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::insert([
            'name' => 'Görkem Bayraktar',
            'email' => 'byrktr@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$OtNHTiWx2b70Rdpgkiies.usjNxiRtl5BUgRUmt7Qq4iL4yARNNUa', // tester123
            'two_factor_secret' => null,
            'type' => 'admin',
            'two_factor_recovery_codes' => null,
            'remember_token' => Str::random(10),
            'profile_photo_path' => null,
            'current_team_id' => null,
        ]);
        
        \App\Models\User::factory(10)->create();
    }
}
