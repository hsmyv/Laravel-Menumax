<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // \App\Models\Admin::create([
        //     'name' => 'admin2',
        //     'email' => 'admin2@admin.com',
        //     'username' => 'Hasan2',
        //     'password' => Hash::make('admin'),
        // ]);

        User::create([
            'name' => 'hasan',
            'email' => 'hasan@gmail.com',
            'password' => Hash::make('hesen123'),
        ]);
    }
}
