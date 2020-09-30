<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePemeriksaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_pemeriksaan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Nodaftar');
            $table->date('TglDaftar');
            $table->integer('NIK')->unsigned();
            $table->integer('idLokasi')->unsigned();
            $table->date('TglPerikasa');
            $table->date('TotalBiaya');
            $table->integer('idPetugas')->unsigned();
            $table->timestamps();
            $table->foreign('NIk')->references('id')->on('coustumers');
            $table->foreign('idLokasi')->references('id')->on('lokasis');
            $table->foreign('idPetugas')->references('id')->on('petugas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_pemeriksaan');
    }
}
