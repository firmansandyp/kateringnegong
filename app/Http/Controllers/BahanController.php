<?php

namespace App\Http\Controllers;

use App\Models\Bahan;

use Illuminate\Http\Request;

class BahanController extends Controller
{
    protected $pageTitle = "Manajemen Menu";

    public function getDaftarBahan()
    {
        $daftarBahan = Bahan::orderBy("nama")->get();
        return view("bahan", [
            "pageTitle" => $this->pageTitle,
            "daftarBahan" => $daftarBahan
        ]);
    }

    public function getBahan(Bahan $bahan)
    {
        return view("bahan", [
            "pageTitle" => $this->pageTitle,
            "bahan" => $bahan
        ]);
    }

    public function updateBahan(Request $request, Bahan $bahan)
    {
        $bahan->stok += $request->input("jumlahRestok");
        $bahan->save();
        return redirect()->route("bahan.daftar");
    }
}
