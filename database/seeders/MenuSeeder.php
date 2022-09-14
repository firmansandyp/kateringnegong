<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;
use App\Models\Bahan;

class MenuSeeder extends Seeder
{
    public function run()
    {
        $menu1 = Menu::create([
            "nama" => "Nasi Tumpeng",
            "deskripsi" => "Nasi tumpeng, berisi ayam bakar, tahu, udang, dan nasi kuning (tumpeng). Cocok untuk acara dengan 15 orang tamu."
        ])->bahan()->attach(Bahan::all());

        $menu2 = Menu::create([
            "nama" => "Nasi Boks",
            "deskripsi" => "Boks berisi nasi putih, ayam goreng, tahu, selada, dan sambal."
        ]);
        $menu2->bahan()->attach(Bahan::where("nama", "Selada")->get());
        $menu2->bahan()->attach(Bahan::where("nama", "Ayam")->get());
        $menu2->bahan()->attach(Bahan::where("nama", "Tahu")->get());
    }
}
