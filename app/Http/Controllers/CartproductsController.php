<?php

namespace App\Http\Controllers;

use App\Cartproduct;
use App\Currency;
use App\PaymentPlatform;
use App\productos;
use Illuminate\Http\Request;
use Session;

class CartproductsController extends Controller
{
    public function getAddToCart(Request $request, $id){
        $product = productos::find($id);
        $cant = $request->cant;
        $oldCart = Session::has('cartproduct') ? session::get('cartproduct') : null;
        $cart = new Cartproduct($oldCart);
        $cart->add($product, $product->id, $cant );
        $request->session()->put('cartproduct',$cart);
        //dd($request->session()->get('cartproduct'));  //esto es para comprobar que si envie los datos
        return redirect()->route('product.shoppingCart');
    }
    public function getReduceByOne($id){
        $oldCart = Session::has('cartproduct') ? session::get('cartproduct') : null;
        $cart = new Cartproduct($oldCart);
        $cart->reduceByOne($id);

        session::put('cartproduct',$cart);
        return redirect()->route('product.shoppingCart');
    }

    public function getCart(){
        $currencies = Currency::all();
        $PaymentPlatforms = PaymentPlatform::all();
        if (!session::has('cartproduct'))
        {
            return view('user/views/shopping-cart');
        }
        $oldCart = session::get('cartproduct');
        $Cart = new Cartproduct($oldCart);
        return view('user/views/shopping-cart',[
            'product'    => $Cart->items,
            'totalPrice' => $Cart->totalPrice,
            'currencies' => $currencies,
            'PaymentPlatforms' => $PaymentPlatforms
        ]);
    }
}
