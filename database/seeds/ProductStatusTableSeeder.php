<?php

use App\product_status;
use Illuminate\Database\Seeder;

class ProductStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        product_status::create([
            'name' => 'Activo',
        ]);
        product_status::create([
            'name' => 'Desactivado',
        ]);
    }
}
