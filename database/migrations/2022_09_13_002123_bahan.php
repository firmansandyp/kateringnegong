<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('bahan', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("nama")->unique();
            $table->integer("stok")->default(0);
            $table->text("deskripsi")->nullable();
            $table->timestamp("tanggal_restok")->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bahan');
    }
};
