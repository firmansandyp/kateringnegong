<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

use App\Models\Pengguna;

class AuthController extends Controller
{
    public function getFormMasuk()
    {
        return view("auth", [
            "pageTitle" => "Masuk"
        ]);
    }

    public function getFormDaftar()
    {
        return view("auth", [
            "pageTitle" => "Daftar"
        ]);
    }

    public function masuk()
    {
    }

    public function daftar(Request $request)
    {
        //Validasi "confirmed" memerlukan input lain dengan nama "<<namaInput>>_confirmation" (pada kasus ini "password_confirmation").
        //Validasi "email:dns" diperlukan agar email mencakup nama domain (misal @gmail.com).
        //Validasi "unique:pengguna" untuk memastikan bahwa sebuah input unik di tabel "pengguna".
        $validatedData = $request->validate([
            "nama" => ["required"],
            "email" => ["required", "email:dns", "unique:pengguna"],
            "password" => ["required", "confirmed"]
        ]);

        // $validatedData["password"] = bcrypt($validatedData["password"]);
        Pengguna::create($validatedData);
        $request->session()->flash("daftarBerhasil", "Akun anda berhasil didaftarkan. Silakan login.");
        return redirect("/auth/masuk");
    }

    public function keluar()
    {
    }

    public function hapus()
    {
    }
}
