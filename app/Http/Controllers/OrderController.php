<?php

namespace App\Http\Controllers;

use App\Operation;
use App\Order;
use App\product_img;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(){
        $orders = Operation::all();
        return view('admin/Orders/pedidos', compact('orders'));
    }
    public function show($id){
        $orders = Order::where('oper_id', $id)->get();
        $operation = Operation::find($id);
        $img = product_img::all();
        $id = $id;
        return view('admin/Orders/viewPedidos', compact('orders', 'operation','img','id'));
    }
    public function updateOrder(Request $request, $id){
        $order = Order::findOrFail($id);
        $order->status = $request->status;
        $order->save();

        return back();
    }

    public function indexUser(){
        $id  = Auth::User()->id;
        $operation = Operation::where('user_id','=',$id)->get();
        return view('user/views/Orders/Pedidos', compact( 'operation'));
    }

    public function showUser($id){
        $orders = Order::where('oper_id', $id)->get();
        $operation = Operation::find($id);
        $img = product_img::all();

        return view('user/views/Orders/viewPedidos', compact('orders', 'operation','img'));
    }

}
