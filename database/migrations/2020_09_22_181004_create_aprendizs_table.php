<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAprendizsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aprendizs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipo_documento')->comment('nombre aprendiz');
            $table->string('documento')->unique()->comment('documento');
            $table->string('nombre1')->comment('nombre1 de aprendiz');
            $table->string('nombre2')->comment('nombre2 de aprendiz');
            $table->string('apellido1')->comment('apellido1 de aprendiz');
            $table->string('apellido2')->comment('apellido2 de aprendiz');
            $table->string('correo')->unique()->comment('correo');
            $table->date('fecha_nac')->comment('fecha de nacimiento de aprendiz');
            $table->string('sexo')->comment('sexo de aprendiz');
            $table->string('tipo_sangre')->comment('tipo de sangre de aprendiz');
            $table->string('direccion')->comment('dirección de aprendiz');
            $table->string('telefono')->comment('telefono de aprendiz');
            $table->string('nivel_sisben')->comment('nivel de sisben de aprendiz');
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
        Schema::dropIfExists('aprendizs');
    }
}
