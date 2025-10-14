<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
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

        Category::create([
            'name' => 'SeMobil',
            'desc' => 'Kategori kendaraan roda empat (mobil) yang tersedia di Sewoapp. Kategori ini mencakup berbagai jenis mobil seperti sedan, SUV, hatchback, dan lainnya, yang dapat disewa oleh pengguna untuk keperluan pribadi atau bisnis.',
        ]);
        Category::create([
            'name' => 'SeMotor',
            'desc' => 'Kategori kendaraan roda dua (motor) yang tersedia di Sewoapp. Kategori ini mencakup berbagai jenis motor seperti skuter, bebek, sport, dan lainnya, yang dapat disewa oleh pengguna untuk keperluan sehari-hari atau perjalanan singkat.',
        ]);
        Category::create([
            'name' => 'SeMolis',
            'desc' => 'Kategori kendaraan mobil/motor listrik (Molis) yang tersedia di Sewoapp. Kategori ini mencakup berbagai jenis kendaraan listrik yang ramah lingkungan, yang dapat disewa oleh pengguna untuk keperluan pribadi atau bisnis, sambil mendukung gaya hidup berkelanjutan.',
        ]);


        //call BookSeeder
        $this->call(
            [
                PostSeeder::class,
                ContactSeeder::class,
            ]
        );
    }
}
