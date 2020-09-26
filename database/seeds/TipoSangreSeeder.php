<?php

use Illuminate\Database\Seeder;
use App\tipoSangre;

class TipoSangreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo = tipoSangre::create(['nombre'=>'A+']);
        $tipo = tipoSangre::create(['nombre'=>'A-']);
        $tipo = tipoSangre::create(['nombre'=>'B+']);
        $tipo = tipoSangre::create(['nombre'=>'B-']);
        $tipo = tipoSangre::create(['nombre'=>'O+']);
        $tipo = tipoSangre::create(['nombre'=>'O-']);
        $tipo = tipoSangre::create(['nombre'=>'AB+']);
        $tipo = tipoSangre::create(['nombre'=>'AB-']);
    }
}
