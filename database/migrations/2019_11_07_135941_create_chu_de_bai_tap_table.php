<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChuDeBaiTapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chu_de_bai_tap', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ma_chu_de');
            $table->unsignedInteger('ma_bai_tap');

            $table->foreign('ma_chu_de')->references('id')->on('chu_de')->onDelete('cascade');
            $table->foreign('ma_bai_tap')->references('id')->on('bai_tap')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chu_de_bai_tap');
    }
}
