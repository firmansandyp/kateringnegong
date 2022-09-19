<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    protected $pageTitle = "Manajemen Menu";

    public function getDaftarMenu()
    {
        $daftarMenu = Menu::with("bahan")->orderBy("nama")->get();
        foreach ($daftarMenu as $menu) {
            $menu->status = $this->getStatus($menu);
        }
        return view("menu", [
            "pageTitle" => $this->pageTitle,
            "daftarMenu" => $daftarMenu
        ]);
    }

    public function getMenu(Menu $menu)
    {
        $menu = Menu::with("bahan")->orderBy("nama")->get();
        $menu->status = $this->getStatus($menu);
        return view("menu", [
            "pageTitle" => $this->pageTitle,
            "menu" => $menu
        ]);
    }

    public function addMenu(Request $request)
    {
        $namaMenu = $request->input("nama");
        $hargaMenu = $request->input("harga");
        $deskripsiMenu = $request->input("deskripsi");
        $hargaMenu = $request->input("harga");
        //Kurang pivot table dan daftar bahan
        Menu::create([
            "nama" => $namaMenu,
            "harga" => $hargaMenu,
            "deskripsi" => $deskripsiMenu
        ]);
        return redirect("/menu");
    }

    public function deleteMenu(Menu $menu)
    {
        $menu->delete();
        return redirect("/menu");
    }

    private function getStatus(Menu $menu)
    {
        $status = "";
        $bahanDiperlukan = $menu->bahan;
        foreach ($bahanDiperlukan as $bahan) {
            if ($bahan->stok <= 0) {
                $status = $status . "- Kurang " . $bahan->nama . "\n";
            }
        }
        if ($status === "") {
            return "Dapat dibuat";
        } else {
            return $status;
        }
    }
}
