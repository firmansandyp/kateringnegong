<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('bahan_menu', function (Blueprint $table) {
            $table->bigIncrements("id");

            $table->foreignId("bahan_id")
                ->constrained("bahan")
                ->onUpdate("cascade")
                ->onDelete("cascade");
            $table->foreignId("menu_id")
                ->constrained("menu")
                ->onUpdate("cascade")
                ->onDelete("cascade");
        });
    }

    public function down()
    {
        Schema::dropIfExists('bahan_menu');
    }
};
