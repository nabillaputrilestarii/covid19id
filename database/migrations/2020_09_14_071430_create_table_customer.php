<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatTablePasien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NIK');
            $table->string('NamaCoustumer');
            $table->text('Alamat');
            $table->date('TglLahir');
            $table->string('JenisKelamin');
            $table->string('StatusKawin');
            $table->string('Nohp');
            $table->string('Username');
            $table->string('Password');
            $table->string('Photo');
            $table->timestamps();

        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_customers');
    }
}
