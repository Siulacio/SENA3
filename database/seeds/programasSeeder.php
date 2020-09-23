<?php

use Illuminate\Database\Seeder;
use App\Programas; // LLamado al modelo


class programasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $programa = Programas::create([
            'nombre' => 'Técnico Sistemas',
            'codigo' => '233101',
            'tipo' => 0,
            'fecha_inicio' => '2019/08/01',
            'fecha_cierre' => '2028/08/01',
            'duracion' => 2208, 
            'estado' => 1, 
        ]);
    }
}
