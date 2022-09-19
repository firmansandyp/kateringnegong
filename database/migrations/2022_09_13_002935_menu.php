<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("nama")->unique();
            $table->integer("harga")->default(0);
            $table->text("deskripsi")->nullable();
            $table->timestamp("tanggal_tambah")->default(now());
        });
    }

    public function down()
    {
        Schema::dropIfExists('menu');
    }
};
