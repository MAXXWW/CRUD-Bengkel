<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_penjualans', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->bigInteger('id_penjualan')->unsigned();;
            $table->foreign('id_penjualan')->references('id')->on('penjualans');
            $table->bigInteger('id_barang')->unsigned();;
            $table->foreign('id_barang')->references('id')->on('barangs');
            $table->double('harga');
            $table->integer('jumlah');
            $table->double('total');
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
        Schema::dropIfExists('detail_penjualans');
    }
}
