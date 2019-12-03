<?php

use App\Currency;
use App\PaymentPlatform;
use App\product_status;
use App\category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        $this->call(RoleSeeder::class);
        $this->call(PaymentPlatformsTableSeeder::class);
        $this->call(CurrenciesTableSeeder::class);
        $this->call(ProductStatusTableSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SubcategorySeeder::class);
        $this->call(UserSeeder::class);

    }
}
