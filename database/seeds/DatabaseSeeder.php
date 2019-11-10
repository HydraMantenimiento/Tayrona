<?php

use App\Currency;
use App\PaymentPlatform;
use App\product_status;
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
        $this->call(RoleSeeder::class);
        $this->call(PaymentPlatformsTableSeeder::class);
        $this->call(CurrenciesTableSeeder::class);
        $this->call(ProductStatusTableSeeder::class);
    }
}
