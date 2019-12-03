<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategorys')->insert([
            'name' => 'alimentos'
        ]);
        DB::table('subcategorys')->insert([
            'name' => 'accesorios'
        ]);
        DB::table('subcategorys')->insert([
            'name' => 'aseo'
        ]);
        DB::table('subcategorys')->insert([
            'name' => 'juguetes'
        ]);
        DB::table('subcategorys')->insert([
            'name' => 'drogeria'
        ]);
    }
}
