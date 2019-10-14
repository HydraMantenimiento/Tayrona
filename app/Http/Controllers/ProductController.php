<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productos;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = productos::paginate(4);
        return  view('admin/product', compact('product') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productoagregar = new productos;
        $productoagregar->name = $request->name;
        $productoagregar->descripcion = $request->descripcion;
        $productoagregar->categoria = $request->categoria;
        $productoagregar->precio = $request->precio;
        $productoagregar->cantidad = $request->cantidad;
        $productoagregar->save();
        return back()->with('agregar','El producto se ha agregado');
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
    public function edit($id)
    {
        $productactualizar = productos::findOrFail($id);
        return view('admin/producteditar', compact('productactualizar'));
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
        $productupdate = productos::findOrFail($id);
        $productupdate->name = $request->name;
        $productupdate->descripcion = $request->descripcion;
        $productupdate->categoria = $request->categoria;
        $productupdate->precio = $request->precio;
        $productupdate->cantidad = $request->cantidad;
        $productupdate->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producteliminar = productos::findOrFail($id);
        $producteliminar->delete();
        return back()->with ('eliminar','el producto ha sido eliminado');
    }
}
