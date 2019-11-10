<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation;

class PaymentController extends Controller
{

    public function pay(Request $request)
    {
      /* $rules = [
            'currency' => ['requiered', 'exists:currencies,iso'],
            'payment_platform' => ['requiered', 'exists:payment_platform,id'],
        ];
        $request->validate($rules);*/
        return $request->all();
    }
    public function approval(){

    }
    public function cancelled(){

    }
}
