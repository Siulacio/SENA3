<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aprendiz extends Model
{
    protected $table='aprendiz';
    protected $fillable=[
        'tipo_documento',
        'documento',
        'nombre1',
        'nombre2',
        'apellido1',
        'apellido2',
        'correo',
        'fecha_nac',
        'sexo',
        'tipo_sangre',
        'direccion',
        'telefono',
        'nivel_sisben',
        'estado',
    ];

    public function documentos(){
        return $this->belongsTo('App\tipoDocumento','tipo_documento');
    }

    public function sangre(){
        return $this->belongsTo('App\tipoSangre','tipo_sangre');
    }
    
    public function sisben(){
        return $this->belongsTo('App\NivelSisben','nivel_sisben');
    }

}
