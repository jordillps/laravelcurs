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

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('12345678'),
        ]);

        //
        User::factory()->create([
            'name' => 'Jordi Llobet',
            'email' => 'jordillps@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        //Crear 50 productos de prueba
        \App\Models\Product::factory(50)->create();
    }
}
