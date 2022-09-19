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
            "stok" => 0,
            "deskripsi" => "Langsung dibekukan di freezer. Tidak perlu rutin restok."
        ]);

        $bahan2 = Bahan::create([
            "nama" => "Ayam",
            "stok" => 50,
            "deskripsi" => "Langsung dibekukan di freezer. Restok setiap bulan."
        ]);

        $bahan3 = Bahan::create([
            "nama" => "Selada",
            "stok" => 500,
            "deskripsi" => "Beli setelah dapat pesanan."
        ]);

        $bahan4 = Bahan::create([
            "nama" => "Tahu",
            "stok" => 50,
            "deskripsi" => "Restok setiap dua minggu."
        ]);
    }
}
