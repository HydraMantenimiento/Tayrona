<?php

namespace App\Services;
use App\Operation;
use App\Order;
use App\Services\CurrencyConversionService;
use Illuminate\Http\Request;
use App\Traits\ConsumesExternalServices;
use Illuminate\Support\Facades\Auth;//<-- asi estaba primero y aparecia el error , coloque el de abajo y se sluciono
//use App\Traits\ConsumesExternalServices\makeRequest; el de abajo<---si no llamo el makeRequest aparece error 401


class PayPalService
{
    use ConsumesExternalServices;

    protected $baseUri;

    protected $clientId;

    protected $clientSecret;

    protected $converter;

    public function __construct(CurrencyConversionService $converter)
    {
        $this->baseUri = config('services.paypal.base_uri');
        $this->clientId = config('services.paypal.client_id');
        $this->clientSecret = config('services.paypal.client_secret');
        $this->converter = $converter;
    }

    public function resolveAuthorization(&$queryParams, &$formParams, &$headers)
    {
        $headers['Authorization'] = $this->resolveAccessToken();
    }

    public function decodeResponse($response)
    {
        return json_decode($response);
    }

    public function resolveAccessToken()
    {
        $credentials = base64_encode("{$this->clientId}:{$this->clientSecret}");

        return "Basic {$credentials}";
    }

    public function handlePayment(Request $request)
    {
        $order = $this->createOrder($request->value, $request->currency);

        $orderLinks = collect($order->links);

        $approve = $orderLinks->where('rel', 'approve')->first();

        session()->put('approvalId', $order->id);

        return redirect($approve->href);
    }

    public function handleApproval()
    {

        if (session()->has('approvalId')) {
            $approvalId = session()->get('approvalId');

            $payment = $this->capturePayment($approvalId);

            $name = $payment->payer->name->given_name;
            $payment = $payment->purchase_units[0]->payments->captures[0]->amount;
            $amount = $payment->value;
            $currency = $payment->currency_code;


            $operation = new Operation;
            $operation->user_id = Auth::User()->id;
            $operation->total = session('cartproduct')->totalPrice;
            $operation->status = 'encurso';
            $operation->save();

            foreach (session('cartproduct')->items as $session ){

                $order = new Order;
                $order->oper_id = $operation->id;
                $order->id_product = $session['item']->id;
                $order->cantidad = $session['qty'];
                $order->precio = $session['item']->precio;
                $order->total = $session['qty'] * $session['item']->precio ;
                $order->save();
            }

            session()->forget('cartproduct');

            return redirect()
                ->route('cliente')
                ->withSuccess(['payment' => "Thanks, {$name}. We received your {$amount} payment."]);
        }

        return redirect()
            ->route('product.shoppingCart')
            ->withErrors('We cannot capture your payment. Try again, please');
    }

    public function createOrder($value, $currency)
    {
        return $this->makeRequest(
            'POST',
            '/v2/checkout/orders',
            [],
            [
                'intent' => 'CAPTURE',
                'purchase_units' => [
                    0 => [
                        'amount' => [
                            'currency_code' => strtoupper('usd'),
                            'value' => round($value * $this->resolveFactor('usd'),2),
                        ]
                    ]
                ],
                'application_context' => [
                    'brand_name' => config('app.name'),
                    'shipping_preference' => 'NO_SHIPPING',
                    'user_action' => 'PAY_NOW',
                    'return_url' => route('approval'),
                    'cancel_url' => route('cancelled'),
                ]
            ],
            [],
            $isJsonRequest = true
        );
    }

    public function capturePayment($approvalId)
    {
        return $this->makeRequest(
            'POST',
            "/v2/checkout/orders/{$approvalId}/capture",
            [],
            [],
            [
                'Content-Type' => 'application/json',
            ]
        );
    }

    public function resolveFactor($currency)
    {
        return $this->converter->convertCurrency('cop', 'usd');
    }
}
