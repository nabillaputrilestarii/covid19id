<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('NoDaftar')->unsigned();
            $table->integer('jumlhOrang');
            $table->integer('idFasilitas')->unsigned();
            $table->timestamps();
            $table->foreign('noDaftar')->references('id')->on('pemeriksaans');
            $table->foreign('idFasilitas')->references('id')->on('fasilitas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('details');
    }
}
