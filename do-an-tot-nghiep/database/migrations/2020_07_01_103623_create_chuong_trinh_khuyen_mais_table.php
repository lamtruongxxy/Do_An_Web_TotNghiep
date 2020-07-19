<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChuongTrinhKhuyenMaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chuong_trinh_khuyen_mai', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_chuong_trinh');
            $table->datetime('tgian_batdau');
            $table->datetime('tgian_ketthuc');
            $table->integer('gia_tri_km');
            $table->string('loai_gia_tri');
            $table->integer('toi_da');
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
        Schema::dropIfExists('ChuongTrinhKhuyenMai');
    }
}
