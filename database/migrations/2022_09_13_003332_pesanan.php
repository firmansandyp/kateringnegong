<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->timestamp("tanggal_pesan")->default(now());
            $table->timestamp("tanggal_deadline")->nullable();
            //default lebih baik:
            //      $date = strtotime(now());
            //      $date = strtotime("+14 day", $date);
            //      $default = date('Y-m-d H:i:s', $date);

            $table->foreignId("pengguna_id")
                ->constrained("pengguna")
                ->onUpdate("cascade")
                ->onDelete("cascade");
        });
    }

    public function down()
    {
        Schema::dropIfExists('pesanan');
    }
};
