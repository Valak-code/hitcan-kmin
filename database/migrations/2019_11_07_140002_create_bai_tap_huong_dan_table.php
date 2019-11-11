<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaiTapHuongDanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bai_tap_huong_dan', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ma_bai_tap');
            $table->unsignedInteger('ma_huong_dan');

            $table->foreign('ma_bai_tap')->references('id')->on('bai_tap')->onDelete('cascade');
            $table->foreign('ma_huong_dan')->references('id')->on('huong_dan')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bai_tap_huong_dan');
    }
}
