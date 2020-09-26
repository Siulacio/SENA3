<?php

use Illuminate\Database\Seeder;
use App\tipoDocumento;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo = tipoDocumento::create(['nombre'=>'C.C - Cédula de Ciudadania']);
        $tipo = tipoDocumento::create(['nombre'=>'C.E - Cédula de Extranjeria']);
        $tipo = tipoDocumento::create(['nombre'=>'R.C - Registro Civil']);
        $tipo = tipoDocumento::create(['nombre'=>'T.I - Tarjeta de Identidad']);
    }
}
