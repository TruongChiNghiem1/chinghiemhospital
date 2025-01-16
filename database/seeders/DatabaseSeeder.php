<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::query()->firstOrNew([
            'code' => 'admin',
            'full_name' => 'admin',
            'email' => 'admin@gmail.com',
            'dob' => date('2025-01-01'),
            'gender' => 1,
            'phone' => '0859774418',
            'position_id' => 1,
            'unit_id' => 1,
            'status' => 1,
            'password' => bcrypt('12345678')
        ]);
    }
}
