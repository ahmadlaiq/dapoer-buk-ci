<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOngkirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('kecamatans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_kecamatan');
            $table->timestamps();
        });

        Schema::create('ongkirs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_desa');
            $table->string('biaya');
            $table->unsignedBigInteger('kecamatan_id');
            $table->foreign('kecamatan_id')->references('id')->on('kecamatans');
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
        Schema::dropIfExists('ongkirs');
    }
}
