<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'admin',
                'email' => 'admin@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('admin'), // use Hash for security
                'role' => 'admin',
                'remember_token' => Str::random(10),
                'created_at' => '2025-05-21 18.31.00',
                'updated_at' => '2025-05-21 18.31.00',
            ],
            [
                'username' => 'user',
                'email' => 'user@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('user'),
                'role' => 'user',
                'remember_token' => Str::random(10),
                'created_at' => '2025-05-21 18.31.00',
                'updated_at' => '2025-05-21 18.31.00',
            ],
        ]);

    }
}