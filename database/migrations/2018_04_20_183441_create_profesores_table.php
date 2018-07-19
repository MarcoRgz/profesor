<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellidoP');
            $table->string('apellidoM')->nullable();
            $table->string('centro')->nullable();
            $table->string('correo')->nullable();
            $table->string('cargo')->nullable();
            $table->string('departamento')->nullable();
            $table->string('celular')->nullable();
            $table->string('telExt')->nullable();
            $table->string('skill')->nullable();
            $table->string('especialidad')->nullable();
            $table->string('extra')->nullable();
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
        Schema::dropIfExists('profesores');

    }
}
