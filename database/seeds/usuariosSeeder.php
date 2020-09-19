<?php

use Illuminate\Database\Seeder;
use App\User;

class usuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = User::create([
            'username'=>'emortiz',
            'nombres'=>'Ewin Mauricio Ortiz',
            'email'=>'emortiz@unicesar.edu.co',
            'password'=>bcrypt(12345678),
            'rol'=>1,
        ]);

        $usuario = User::create([
            'username'=>'yhernandez',
            'nombres'=>'Yesibel Hernandez',
            'email'=>'yhernandez@unicesar.edu.co',
            'password'=>bcrypt(12345678),
            'rol'=>2,
        ]);

        $usuario = User::create([
            'username'=>'wurbaez',
            'nombres'=>'Wilder Urbaez',
            'email'=>'wurbaez@unicesar.edu.co',
            'password'=>bcrypt(12345678),
            'rol'=>3,
        ]);

        $usuario = User::create([
            'username'=>'lfpalacio',
            'nombres'=>'Luis Felipe Palacio',
            'email'=>'lfpalacio@unicesar.edu.co',
            'password'=>bcrypt(12345678),
            'rol'=>4,
        ]);
    }
}
