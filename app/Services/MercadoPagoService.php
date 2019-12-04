<?php

namespace App\Services;

use App\Order;
use Illuminate\Http\Request;
use App\Traits\ConsumesExternalServices;
use App\Services\CurrencyConversionService;
use Illuminate\Support\Facades\Auth;

class MercadoPagoService
{
    use ConsumesExternalServices;

    protected $baseUri;

    protected $key;

    protected $secret;

    protected $baseCurrency;

    protected $converter;

    public function __construct(CurrencyConversionService $converter)
    {
        $this->baseUri = config('services.mercadopago.base_uri');
        $this->key = config('services.mercadopago.key');
        $this->secret = config('services.mercadopago.secret');
        $this->baseCurrency = config('services.mercadopago.base_currency');

        $this->converter = $converter;
    }

    public function resolveAuthorization(&$queryParams, &$formParams, &$headers)
    {
        $queryParams['access_token'] = $this->resolveAccessToken();
    }

    public function decodeResponse($response)
    {
        return json_decode($response);
    }

    public function resolveAccessToken()
    {
        return $this->secret;
    }

    public function handlePayment(Request $request)
    {
        $request->validate([
            'card_network' => 'required',
            'card_token' => 'required',
            'email' => 'required',
        ]);

        $payment = $this->createPayment(
            $request->value,
            $request->currency,
            $request->card_network,
            $request->card_token,
            $request->email
        );

        if ($payment->status === "approved") {
            $name = $payment->payer->first_name;
            $currency = strtoupper($payment->currency_id);
            $amount = number_format($payment->transaction_amount, 0, ',', '.');
            $originalAmount = $request->value;
            $originalCurrency = strtoupper($request->currency);

            foreach (session('cartproduct')->items as $session ){

                $order = new Order;
                $order->id_user = Auth::User()->id;
                $order->id_product = $session['item']->id;
                $order->cantidad = $session['qty'];
                $order->precio = $session['item']->precio;
                $order->total = $session['qty'] * $session['item']->precio ;
                $order->status = 'Pedido';
                $order->save();
            }
            session()->forget('cartproduct');
            return redirect()
                ->route('cliente')
                ->withSuccess(['payment' => "Gracias, {$name}. Recibimos su pago de {$originalAmount}{$originalCurrency} pago ({$amount}{$currency})."]);
        }

        return redirect()
            ->route('product.shoppingCart')
            ->withErrors('We were unable to confirm your payment. Try again, please');
    }



    public function createPayment($value, $currency, $cardNetwork, $cardToken, $email, $installments = 1)
    {
//'
        return $this->makeRequest(
            'POST',
            '/v1/payments',
            [],
            [
                'payer' => [
                    'email' => $email,
                ],
                'binary_mode' => true,
                'transaction_amount' => round($value),
                'payment_method_id' => $cardNetwork,
                'token' => $cardToken,
                'installments' => $installments,
                'statement_descriptor' => config('app.name'),
            ],
            [],
            $isJsonRequest = true

        );
    }

    public function resolveFactor($currency)
    {
        return $this->converter->convertCurrency('cop', 'usd');
    }
}
