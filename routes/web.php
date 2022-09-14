<?php

use Illuminate\Support\Facades\Route;

//README.md untuk wewenang akses setiap peran pengguna.
//Setiap controller beri parameter objek Request dan Closure ($next) saja.

Route::prefix("/pesanan")->group(function () {
    Route::get("/{pesanan:id}/detail",);
    Route::post("/{pesanan:id}/selesai",);
});

Route::prefix("/menu")->group(function () {
    Route::get("/{menu:id}/detail",);
    Route::post("/tambah",);
    Route::post("/{menu:id}/update",);
    Route::delete("/{menu:id}/de;ete",);
});

Route::prefix("/bahan")->group(function () {
    Route::get("/{bahan:id}/detail",);
    Route::post("/tambah",);
    Route::post("/{bahan:id}/update",);
    Route::delete("/{bahan:id}/hapus",);
});

Route::prefix("/profil")->group(function () {
});

Route::prefix("/statistik")->group(function () {
});
