<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use App\Models\Category;
use App\Models\Tag;
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

        Company::factory()->create([
            'name' => 'Google',
        ]);

        Company::factory()->create([
            'name' => 'Microsoft',
        ]);

        Category::factory()->create([
            'name' => 'Libros',
            'company_id' => 1,
        ]);

        Category::factory()->create([
            'name' => 'Revistas',
            'company_id' => 2,
        ]);

         Tag::factory()->create([
            'name' => 'Bestseller',
            'company_id' => 1,
        ]);

        Tag::factory()->create([
            'name' => 'Tendencia',
            'company_id' => 2,
        ]);



        //Crear 50 productos de prueba
        \App\Models\Product::factory(20)->create();
    }
}
