<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PenggunaSeeder::class,
            BahanSeeder::class,
            MenuSeeder::class,
            PesananSeeder::class,
            RiwayatPembayaranSeeder::class
        ]);
    }
}
