<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTenThongSoSanPhamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_thong_so', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('san_pham_id');
            $table->integer('thong_so_id');
            $table->integer('gia_tri');
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
        Schema::dropIfExists('ThongSoSP');
    }
}
