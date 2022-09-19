<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = "menu";
    public $timestamps = false;
    protected $guarded = [
        "id"
    ];
    protected $fillable = [
        "nama",
        "harga",
        "deskripsi",
        "tanggal_tambah"
    ];

    public function bahan()
    {
        //Secara default hanya kolom foreignId saja yang akan dibawa pivot. Apabila ada kolom lain yang ingin dibawa dari tabel pivot, kolom tersebut perlu dinyatakan dengan withPivot().
        return $this->belongsToMany(Bahan::class)->orderBy("nama")->withPivot("jumlah");
    }

    public function pesanan()
    {
        return $this->belongsToMany(Pesanan::class);
    }
}
