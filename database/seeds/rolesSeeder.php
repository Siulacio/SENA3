<?php

use Illuminate\Database\Seeder;
use App\Rol;

class rolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = Rol::create(['nombre'=>'Administrador']); //1
        $rol = Rol::create(['nombre'=>'Instructor Líder']); //2
        $rol = Rol::create(['nombre'=>'Instructor Transversal']); //3
        $rol = Rol::create(['nombre'=>'Aprendiz']); //4
    }
}
