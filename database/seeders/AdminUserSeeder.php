<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Admins',
            'email' => 'test@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('parole'), // password
            'remember_token' => Str::random(10),
            'is_admin' => 1,
        ]);
    }
}
