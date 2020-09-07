<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengirimanBarangTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengiriman_barang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('tanggal_pengiriman');
            $table->text('nama_penerima');
            $table->string('kota_asal');
            $table->string('kota_tujuan');
            $table->text('nama_penerima');
            $table->text('organisasi_penerima');
            $table->longText('alamat');
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
        Schema::dropIfExists('pengiriman_barang');
    }
}
