<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Pengguna;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        $pengguna1 = Pengguna::create([
            "email" => "pemilik@gmail.com",
            "password" => "pemilikpass",
            "nama" => "Pemilik 1",
            "peran" => "pemilik",
            "telepon" => "081219092629"
        ]);

        $pengguna2 = Pengguna::create([
            "email" => "pegawai1@gmail.com",
            "password" => "pegawaipass",
            "nama" => "Staff 1",
            "peran" => "pegawai",
            "telepon" => "0812123482394"
        ]);

        $pengguna3 = Pengguna::create([
            "email" => "pegawai2@gmail.com",
            "password" => "pegawaipass",
            "nama" => "John",
            "peran" => "pegawai",
            "telepon" => "0822357903455"
        ]);

        $pengguna4 = Pengguna::create([
            "email" => "bob@gmail.com",
            "password" => "pelangganpass",
            "nama" => "Bob",
            "peran" => "pelanggan",
            "telepon" => "0822897356875"
        ]);

        $pengguna5 = Pengguna::create([
            "email" => "ferdinand@gmail.com",
            "password" => "pelangganpass",
            "nama" => "Ferdinand2389",
            "peran" => "pelanggan",
            "telepon" => "0822353683455"
        ]);
    }
}
