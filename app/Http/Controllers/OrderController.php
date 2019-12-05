<?php

namespace App\Http\Controllers;

use App\Operation;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders = Operation::all();
        return view('admin/Orders/pedidos', compact('orders'));
    }
    public function show($id){
        $orders = Order::where('oper_id', $id)->get();
        $operation = Operation::find($id);
        return view('admin/Orders/show', compact('orders', 'operation'));
    }
}
