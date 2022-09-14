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
        "deskripsi",
        "tanggal_tambah"
    ];

    public function bahan()
    {
        return $this->belongsToMany(Bahan::class);
    }

    public function pesanan()
    {
        return $this->belongsToMany(Pesanan::class);
    }
}
