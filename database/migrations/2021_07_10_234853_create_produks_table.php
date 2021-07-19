<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('varians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_varian');
            $table->timestamps();
        });

        Schema::create('produks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('gambar');
            $table->string('nama_produk');
            $table->string('harga');
            $table->string('deskripsi');
            $table->unsignedBigInteger('varian_id');
            $table->foreign('varian_id')->references('id')->on('varians');
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
        Schema::dropIfExists('produks');
    }
}
