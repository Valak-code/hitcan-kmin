<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaiTapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bai_tap', function (Blueprint $table) {
            $table->increments('id');
            $table->text('ten_bai_tap');
            $table->text('mo_ta');
            $table->text('yeu_cau');
            $table->text('dinh_dang_input');
            $table->text('rang_buoc_du_lieu');
            $table->text('dinh_dang_output');
            $table->text('input');
            $table->text('output');
            $table->text('do_kho');
            $table->text('giai_thich');
            $table->text('tu_khoa');
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
        Schema::dropIfExists('bai_tap');
    }
}
