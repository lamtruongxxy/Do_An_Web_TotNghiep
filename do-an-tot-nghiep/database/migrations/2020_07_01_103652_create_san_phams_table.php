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
        Schema::create('san_pham', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nha_san_xuat_id');
            $table->string('ten_sp');
            $table->text('mo_ta_sp');
            $table->integer('gia_sp');
            $table->integer('gia_khuyen_mai');
            $table->integer('so_luong_ton_kho');
            $table->integer('loai_san_pham_id');
            $table->string('che_do_bao_hanh');
            $table->boolean('trang_thai');
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
