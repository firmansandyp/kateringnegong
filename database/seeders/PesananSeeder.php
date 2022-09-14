<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pesanan;
use App\Models\Menu;

class PesananSeeder extends Seeder
{
    public function run()
    {
        $pesanan1 = Pesanan::create([
            "pengguna_id" => 4
        ]);
        $pesanan1->menu()->attach(Menu::where("nama", "Nasi Boks")->get(), [
            "jumlah_porsi" => 29,
            "permintaan_tambahan" => "Tidak perlu sambal."
        ]);
        $pesanan1->menu()->attach(Menu::where("nama", "Nasi Tumpeng")->get(), [
            "jumlah_porsi" => 3,
            "permintaan_tambahan" => "Tukar udang dengan tambahan porsi ayam."
        ]);

        $pesanan2 = Pesanan::create([
            "pengguna_id" => 5
        ]);
        $pesanan2->menu()->attach(Menu::where("nama", "Nasi Boks")->get(), [
            "jumlah_porsi" => 100,
            "permintaan_tambahan" => "Tidak perlu tahu."
        ]);
    }
}
