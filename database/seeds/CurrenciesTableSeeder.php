<?php

use App\Currency;
use Illuminate\Database\Seeder;

class CurrenciesTableSeeder extends Seeder
{
    public function run()
    {
        $currencies =[

            'usd',
            'eur',
        ];

        foreach ($currencies as $currency){
            Currency::create([
                'iso' => $currency,
            ]);
        }
    }
}
