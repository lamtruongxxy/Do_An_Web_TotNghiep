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
            $table->string('machuongtrinhkm');
            $table->string('tenchuongtrinh');
            $table->datetime('tgianbatdau');
            $table->datetime('tgianketthuc');
            $table->integer('giatrikm');
            $table->string('loaigiatri');
            $table->integer('toida');
            $table->integer('trangthai');
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
