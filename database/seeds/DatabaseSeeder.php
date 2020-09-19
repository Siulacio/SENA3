<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(rolesSeeder::class);
        $this->call(usuariosSeeder::class);
        $this->call(programasSeeder::class);

    }
}
