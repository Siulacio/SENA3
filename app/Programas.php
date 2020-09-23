<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programas extends Model
{
    protected $table = 'programas';//Identifo la tabla con la que se va a comunicar 
    //Identifico los campos dentro de la tabla con los que se va a comunicar
    protected $fillable = [
        'nombre',
        'codigo',
        'fecha_inicio',
        'fecha_cierre',
        'tipo',
        'duracion',
        'estado'
    ];
}
