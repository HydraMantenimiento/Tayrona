<?php

namespace App\Http\Controllers;

use App\descriptions_product;
use App\product_img;
use http\Env\Response;
use Illuminate\Http\Request;

class DescriptionProductController extends Controller
{
    public function visitors($id)
    {
        $descriptions = descriptions_product::where('product_id', $id)->get();
        $imgs = product_img::where('product_id', $id)->get();
        return view('visitante/descripcion', compact('descriptions', 'imgs'));
    }

    public function user()
    {

    }

    public function index($id) {
        $producto = productos::find($id);
        $descripcion = descriptions_product::where('product_id', $id)->get();
        return view('user/views/descripcionuser', compact('producto','descripcion'));
    }

    public function store(Request $request)
    {
        $description = new descriptions_product;
        $description->product_id = $request->productid;
        $description->name = $request->name;
        $description->description =$request->descripcion;
        $description->save();
        return back();
    }
}
