<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bahan;

class BahanSeeder extends Seeder
{
    public function run()
    {
        $bahan1 = Bahan::create([
            "nama" => "Udang",
            "deskripsi" => "Langsung dibekukan di freezer. Tidak perlu rutin restok."
        ]);

        $bahan2 = Bahan::create([
            "nama" => "Ayam",
            "deskripsi" => "Langsung dibekukan di freezer. Restok setiap bulan."
        ]);

        $bahan3 = Bahan::create([
            "nama" => "Selada",
            "deskripsi" => "Beli setelah dapat pesanan."
        ]);

        $bahan4 = Bahan::create([
            "nama" => "Tahu",
            "deskripsi" => "Restok setiap dua minggu."
        ]);
    }
}
