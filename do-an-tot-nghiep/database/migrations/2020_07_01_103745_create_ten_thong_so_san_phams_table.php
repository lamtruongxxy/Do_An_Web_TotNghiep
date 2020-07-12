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
        Schema::create('TenThongSoSP', function (Blueprint $table) {
            $table->increments('id_thong_so_sp');
            $table->string('masp');
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
        Schema::dropIfExists('TenThongSoSP');
    }
}
