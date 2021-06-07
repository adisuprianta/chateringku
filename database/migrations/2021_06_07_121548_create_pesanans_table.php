<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->increments('id_pesanan');
            $table->integer('id_pelanggan')->unsigned();
            $table->integer('id_pegawai')->unsigned();
            $table->date('tanggal_pesanan');
            $table->string('status');
            $table->foreign('id_pelanggan')->references('id_pelanggan')->on('pelanggans')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('id_pegawai')->references('id_pegawai')->on('pegawais')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanans');
    }
}
