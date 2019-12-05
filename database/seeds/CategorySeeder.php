<?php

use App\category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        category::create([
            'name' => 'perros'
        ]);
        category::create([
            'name' => 'gatos'
        ]);
        category::create([
            'name' => 'otras mascotas'
        ]);

    }
}
