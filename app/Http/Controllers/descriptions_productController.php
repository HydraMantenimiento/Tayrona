<?php

namespace App\Http\Controllers;

use App\descriptions_product;
use App\productos;
use Illuminate\Http\Request;

class descriptions_productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $producto = productos::find($id);
        $descripcion = descriptions_product::where('product_id', $id)->get();
        return view('user/views/descripcionuser', compact('producto','descripcion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $product = productos::find($id);
        return view('admin/products/descripcion/create',compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        $description = new descriptions_product;
        $description->product_id = $request->productid;
        $description->name = $request->name;
        $description->description =$request->descripcion;
        $description->save();
        return back()->with('alert','La Descripcion fue agregada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $product)
    {
        $product = productos::find($product);
        $description = descriptions_product::find($id);
        return view('admin/products/descripcion/edit', compact('description', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = descriptions_product::find($id);

        $update->name = $request->name;
        $update->description = $request->descripcion;
        $update->save();
        return back()->with('alert','La Descripcion fue modifcada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = descriptions_product::find($id);
        $delete->delete();
        return back();
    }
}
