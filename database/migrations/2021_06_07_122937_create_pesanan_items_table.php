<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesananItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan_items', function (Blueprint $table) {
            $table->increments('id_item');
            $table->integer('id_pesanan')->unsigned();
            $table->integer('id_produk')->unsigned();
            $table->integer('jumlah');
            $table->integer('harga');
            $table->foreign('id_pesanan')->references('id_pesanan')->on('pesanans')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('id_produk')->references('id_produk')->on('produks')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanan_items');
    }
}
