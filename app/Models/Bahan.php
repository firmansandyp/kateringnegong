<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bahan extends Model
{
    use HasFactory;

    protected $table = "bahan";
    public $timestamps = false;
    protected $guarded = [
        "id"
    ];
    protected $fillable = [
        "nama",
        "stok",
        "deskripsi",
        "tanggal_restok"
    ];

    public function menu()
    {
        return $this->belongsToMany(Menu::class);
    }
}
