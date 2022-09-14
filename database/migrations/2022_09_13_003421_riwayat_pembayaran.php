<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('riwayat_pembayaran', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("pembayaran_1");
            $table->string("pembayaran_2")->nullable();
            $table->timestamp("tanggal_bayar_1")->default(now());
            $table->timestamp("tanggal_bayar_2")->nullable();
            $table->boolean("lunas")->default(false);

            $table->foreignId("pesanan_id")
                ->constrained("pesanan")
                ->onUpdate("cascade")
                ->onDelete("cascade");
        });
    }

    public function down()
    {
        Schema::dropIfExists('riwayat_pembayaran');
    }
};
