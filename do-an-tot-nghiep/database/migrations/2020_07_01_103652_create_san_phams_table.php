<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanPhamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SanPham', function (Blueprint $table) {
            $table->increments('masp');
            $table->string('ma_nha_sx');
            $table->string('ten_sp');
            $table->string('mo_ta_sp');
            $table->integer('gia_sp');
            $table->integer('so_luong_ton_kho');
            $table->string('loai_sp');
            $table->string('che_do_bao_hanh');
            $table->integer('trang_thai');
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
        Schema::dropIfExists('SanPham');
    }
}
