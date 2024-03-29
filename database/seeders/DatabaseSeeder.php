<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Category
        \App\Models\Category::factory(5)->create();

        // product
        \App\Models\Product::factory(20)->create();

        // mendaftarkan seeder agar mengenerate data
        $this->call([
            UserSeeder::class,
        ]);
    }
}
