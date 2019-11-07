<?php

namespace App\Http\Controllers;

use App\Carrousel;
use Illuminate\Http\Request;
use Auth;

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
            return  redirect()->route('users');
        }
    }

    public function home()
    {
        $carrousels = Carrousel::all();
        return view('Invited/home', compact('carrousels'));
    }

    public function dashboard()
    {
        return view('admin/dashboard');
    }

    public function users()
    {
       return view('user/users');
    }
}
