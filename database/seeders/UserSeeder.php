<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // membuat 9 random user
        \App\Models\User::factory(9)->create();

        // membuat manual user
        $user = \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'hari@fic12.com',
            'password' => Hash::make('hari8061'),
        ]);

    }
}
