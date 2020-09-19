<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre')->comment('Nombre del Programa');
            $table->string('codigo')->comment('Código del Programa');
            $table->date('fecha_inicio')->comment('Fecha de inicio del Programa');
            $table->date('fecha_cierre')->comment('Fecha de cierre del Programa');
            $table->boolean('tipo')->comment('0:Técnico, 1:Tecnólogo'); 
            $table->integer('duracion')->comment('Duración del Programa en horas');
            $table->timestamps();

            $table->engine='InnoDB';
            $table->charset='utf8';
            $table->collation='utf8_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programas');
    }
}
