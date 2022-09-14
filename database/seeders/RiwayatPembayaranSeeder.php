<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RiwayatPembayaran;

class RiwayatPembayaranSeeder extends Seeder
{
    public function run()
    {
        $riwayatPembayaran1 = RiwayatPembayaran::create([
            "pesanan_id" => 1,
            "pembayaran_1" => "800000",
        ]);
    }
}
