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
            "harga" => 120000,
            "deskripsi" => "Nasi tumpeng, berisi ayam bakar, tahu, udang, dan nasi kuning (tumpeng). Cocok untuk acara dengan 15 orang tamu."
        ]);
        $menu1->bahan()->attach(Bahan::where("nama", "Udang")->get(), [
            "jumlah" => 50
        ]);
        $menu1->bahan()->attach(Bahan::where("nama", "Selada")->get(), [
            "jumlah" => 25
        ]);
        $menu1->bahan()->attach(Bahan::where("nama", "Ayam")->get(), [
            "jumlah" => 15
        ]);
        $menu1->bahan()->attach(Bahan::where("nama", "Tahu")->get(), [
            "jumlah" => 20
        ]);

        $menu2 = Menu::create([
            "nama" => "Nasi Boks",
            "harga" => 25000,
            "deskripsi" => "Boks berisi nasi putih, ayam goreng, tahu, selada, dan sambal."
        ]);
        $menu2->bahan()->attach(Bahan::where("nama", "Selada")->get(), [
            "jumlah" => 5
        ]);
        $menu2->bahan()->attach(Bahan::where("nama", "Ayam")->get(), [
            "jumlah" => 1
        ]);
        $menu2->bahan()->attach(Bahan::where("nama", "Tahu")->get(), [
            "jumlah" => 2
        ]);
    }
}
