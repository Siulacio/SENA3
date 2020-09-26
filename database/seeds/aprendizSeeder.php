<?php

use Illuminate\Database\Seeder;
use App\Aprendiz;

class aprendizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aprendiz = Aprendiz::create([
            'tipo_documento'=>1,
            'documento'=>'1065611326',
            'nombre1'=>'Luis',
            'nombre2'=>'Felipe',
            'apellido1'=>'Palacio',
            'apellido2'=>'Salamanca',
            'correo'=>'siulacio@hotmail.com',
            'fecha_nac'=>'1989-11-25',
            'sexo'=>1,
            'tipo_sangre'=>5,
            'direccion'=>'Casa',
            'telefono'=>'Telefono',
            'nivel_sisben'=>3,
        ]);
    }
}
