<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = "pesanan";
    public $timestamps = false;
    protected $guarded = [
        "id"
    ];
    protected $fillable = [
        "tanggal_pesan",
        "tanggal_deadline",
        "pengguna_id"
    ];

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class);
    }

    public function riwayatpembayaran()
    {
        return $this->hasOne(RiwayatPembayaran::class);
    }

    public function menu()
    {
        return $this->belongsToMany(Menu::class)->orderBy("nama")->withPivot("permintaan_tambahan", "jumlah_porsi");
    }
}
