<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('menu_pesanan', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->text("permintaan_tambahan")->nullable();
            $table->integer("jumlah_porsi")->default(1);

            $table->foreignId("menu_id")
                ->constrained("menu")
                ->onUpdate("cascade")
                ->onDelete("cascade");
            $table->foreignId("pesanan_id")
                ->constrained("pesanan")
                ->onUpdate("cascade")
                ->onDelete("cascade");
        });
    }

    public function down()
    {
        Schema::dropIfExists('menu_pesanan');
    }
};
