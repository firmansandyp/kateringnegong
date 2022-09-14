<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = "pengguna";
    public $timestamps = false;
    protected $guarded = [
        "id"
    ];
    protected $fillable = [
        "email",
        "password",
        "nama",
        "peran",
        "telepon",
        "tanggal_daftar"
    ];

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class);
    }
}
