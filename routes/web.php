<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MenuController;
use App\Http\Controllers\BahanController;

//README.md untuk wewenang akses setiap peran pengguna.
//Setiap controller beri parameter objek Request dan Closure ($next) saja.

Route::get("/", function () {
    return view("home", [
        "pageTitle" => "Home"
    ]);
});
Route::get("/about", function () {
    return view("about", [
        "pageTitle" => "About"
    ]);
});

Route::prefix("/pesanan")->group(function () {
    Route::get("/",);
    Route::get("/{pesanan:id}/detail",);
    Route::post("/{pesanan:id}/selesai",);
});

Route::prefix("/menu")->name("menu.")->group(function () {
    Route::get("/", [MenuController::class, "getDaftarMenu"])->name("daftar");
    Route::get("/{menu:id}/detail", [MenuController::class, "getMenu"])->name("detail");
    Route::post("/tambah", [MenuController::class, "addMenu"])->name("tambah");
    Route::post("/{menu:id}/update",)->name("update");;
    Route::delete("/{menu:id}/hapus", [MenuController::class, "deleteMenu"])->name("hapus");;
});

Route::prefix("/bahan")->name("bahan.")->group(function () {
    Route::get("/", [BahanController::class, "getDaftarBahan"])->name("daftar");
    Route::get("/{bahan:id}/detail",)->name("detail");
    Route::post("/tambah",)->name("tambah");
    Route::post("/{bahan:id}/update", [BahanController::class, "updateBahan"])->name("update");
    Route::delete("/{bahan:id}/hapus",)->name("hapus");
});

Route::prefix("/profil")->group(function () {
});

Route::prefix("/statistik")->group(function () {
});
