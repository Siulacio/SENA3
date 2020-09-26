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
        Schema::create('aprendiz', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('tipo_documento')->comment('tipo documento aprendiz');
            $table->string('documento')->unique()->comment('documento');
            $table->string('nombre1')->comment('nombre1 de aprendiz');
            $table->string('nombre2')->nullable()->comment('nombre2 de aprendiz');
            $table->string('apellido1')->comment('apellido1 de aprendiz');
            $table->string('apellido2')->nullable()->comment('apellido2 de aprendiz');
            $table->string('correo')->unique()->comment('correo');
            $table->date('fecha_nac')->comment('fecha de nacimiento de aprendiz');
            $table->boolean('sexo')->comment('sexo de aprendiz 1->Hombre, 0->Mujer');
            $table->unsignedBigInteger('tipo_sangre')->comment('tipo de sangre de aprendiz');
            $table->string('direccion')->nullable()->comment('dirección de aprendiz');
            $table->string('telefono')->nullable()->comment('telefono de aprendiz');
            $table->unsignedBigInteger('nivel_sisben')->comment('nivel de sisben de aprendiz');
            $table->boolean('estado')->default(1)->comment('estado aprendiz 0: Inactivo, 1: Activo');

            $table->foreign('tipo_documento')->references('id')->on('tipo_documentos');
            $table->foreign('tipo_sangre')->references('id')->on('tipo_sangres');
            $table->foreign('nivel_sisben')->references('id')->on('nivel_sisbens');

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
        Schema::dropIfExists('aprendiz');
    }
}
