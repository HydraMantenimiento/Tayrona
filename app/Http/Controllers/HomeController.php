<?php

namespace App\Http\Controllers;


use App\Carrousel;
use App\category_product;
use App\Currency;
use App\PaymentPlatform;
use App\productos;
use Illuminate\Http\Request;
use Auth;
use Session;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if(Auth::user()->role_id == '1') {
           return  redirect()->route('dashboard');
        }else if(Auth::user()->role_id == '2') {
            return  redirect()->route('cliente');
        }
    }

    public function home()
    {
        $carrousels = Carrousel::all();
        return view('visitante/home', compact('carrousels'));
    }

    public function dashboard()
{
    return view('admin/dashboard');
}
    public function cliente()
    {
        $currencies = Currency::all();
        $paymentPlatforms = PaymentPlatform::all();

        return view('user/users')->with([
            'currencies' => $currencies,
            'paymentPlatforms' => $paymentPlatforms,
        ]);
    }

    public function products()
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        header("Allow: GET, POST, OPTIONS, PUT, DELETE");

        $products = productos::all();
        echo  json_encode($products);
    }
}
