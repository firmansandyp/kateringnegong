<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPembayaran extends Model
{
    use HasFactory;

    protected $table = "riwayat_pembayaran";
    public $timestamps = false;
    protected $guarded = [
        "id"
    ];
    protected $fillable = [
        "pesanan_id",
        "pembayaran_1",
        "pembayaran_2",
        "tanggal_bayar_1",
        "tanggal_bayar_2",
        "lunas"
    ];

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class);
    }
}
