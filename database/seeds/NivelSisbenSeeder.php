<?php

use Illuminate\Database\Seeder;
use App\NivelSisben;

class NivelSisbenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nivel = NivelSisben::create(['nombre'=>'Nivel I']);
        $nivel = NivelSisben::create(['nombre'=>'Nivel II']);
        $nivel = NivelSisben::create(['nombre'=>'Nivel III']);
        $nivel = NivelSisben::create(['nombre'=>'Nivel IV']);
        $nivel = NivelSisben::create(['nombre'=>'Nivel V']);
    }
}
