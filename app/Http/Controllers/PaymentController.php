<?php

namespace App\Http\Controllers;

use App\Services\PayPalService;
use App\Services\MercadoPagoService;
use App\Resolvers\PaymentPlatformResolver;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    protected $paymentPlatformResolver;

    public function __construct(PaymentPlatformResolver $paymentPlatformResolver)
    {
        $this->middleware('auth');
        $this->paymentPlatformResolver = $paymentPlatformResolver;
    }

    public function pay(Request $request)
    {
        $rules = [
            'value'=>['required'],

            'payment_platform' => ['required', 'exists:payment_platforms,id'],
        ];
        $request->validate($rules);

        $paymentPlatform = $this->paymentPlatformResolver->resolveService($request->payment_platform);
        session()->put('paymentPlatformId', $request->payment_platform);

        return $paymentPlatform->handlePayment($request);
    }
    public function approval(){

        if (session()->has('paymentPlatformId')) {
            $paymentPlatform = $this->paymentPlatformResolver
                ->resolveService(session()->get('paymentPlatformId'));

            return $paymentPlatform->handleApproval();
        }

        return redirect()->route('cliente')->withErrors('No podemos recuperar su plataforma de pago. Por favor, inténtalo de nuevo.');
    }
    public function cancelled(){
        return redirect()->route('product.shoppingCart')->withErrors('cancelaste el pago.');
    }
}
