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
        Schema::create('ChuongTrinhKhuyenMai', function (Blueprint $table) {
            $table->increments('ma_chuong_trinh_km');
            $table->string('ten_chuong_trinh');
            $table->datetime('tgian_batdau');
            $table->datetime('tgian_ketthuc');
            $table->integer('gia_tri_km');
            $table->string('loai_gia_tri');
            $table->integer('toi_da');
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
        Schema::dropIfExists('ChuongTrinhKhuyenMai');
    }
}
