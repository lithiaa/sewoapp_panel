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

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'phone_number' => '08234567890',
            'address' => 'Jl. Dinoyo Permai, lowokwaru, Kota Malang'
        ]);


        //call BookSeeder
        $this->call(
            [
                BookSeeder::class,
                PostSeeder::class,
                ContactSeeder::class,
            ]
        );
    }
}
