<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pengguna', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("email")->unique();
            $table->text("password");
            $table->string("nama")->nullable();
            $table->enum("peran", ["pemilik", "pegawai", "pelanggan"])->default("pelanggan");
            $table->string("telepon")->nullable();
            $table->timestamp("tanggal_daftar")->default(now());
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengguna');
    }
};
