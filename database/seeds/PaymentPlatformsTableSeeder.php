<?php

use App\PaymentPlatform;
use Illuminate\Database\Seeder;

class PaymentPlatformsTableSeeder extends Seeder
{
    public function run()
    {
        PaymentPlatform::create([
           'name'  => 'PayPal',
           'image' => 'img/Payment-Platforms/paypal.jpg',
        ]);
        PaymentPlatform::create([
            'name'  => 'Stripe',
            'image' => 'img/Payment-Platforms/stripe.jpg',
        ]);
        PaymentPlatform::create([
            'name'  => 'PayU',
            'image' => 'img/Payment-Platforms/payu.jpg',
        ]);
        PaymentPlatform::create([
            'name' => 'MercadoPago',
            'image' => 'img/payment-platforms/mercadopago.jpg',
        ]);
    }
}
