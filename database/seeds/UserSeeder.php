<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id'           => 1,
            'name'              => 'Administrador',
            'lastname'          => 'Tayrona',
            'type_document'     => 'Cedula de Ciudadania',
            'number_document'   => '123456789',
            'sex'               => 'Masculino',
            'telephone'         => '2392673',
            'address'           => 'Carrera 19 No 18 – 43 Sur Plaza Mercado Restrepo L 29 – 30 – 31',
            'email'             => 'admin@hotmail.com',
            'password'          => bcrypt('123456789'),
            'avatar'            => 'imagenes/default.png',
        ]);

        DB::table('users')->insert([
            'role_id'           => 2,
            'name'              => 'user',
            'lastname'          => 'Tayrona',
            'type_document'     => 'Cedula de Ciudadania',
            'number_document'   => '123456789',
            'sex'               => 'Masculino',
            'telephone'         => '2392673',
            'address'           => 'Carrera 19 No 18 – 43 Sur Plaza Mercado Restrepo L 29 – 30 – 31',
            'email'             => 'usuario@hotmail.com',
            'password'          => bcrypt('123456789'),
            'avatar'            => 'imagenes/default.png',
        ]);
    }
}
