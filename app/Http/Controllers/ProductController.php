<?php

namespace App\Http\Controllers;

use App\product_categorys;
use App\product_img;
use App\product_status;
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
        $categoria = product_categorys::all();
        $status = product_status::all();
        return  view('admin/product', compact('product','categoria', 'status') );
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
        $productoagregar->product_status_id  = $request->estado;
        $productoagregar->product_categorys_id  = $request->categorias;
        $productoagregar->name = $request->name;
        $productoagregar->descripcion = $request->descripcion;
        $productoagregar->precio = $request->precio;
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
        $img = product_img::where('product_id', $id)->get();
        return view('admin/producteditar', compact('productactualizar', 'img'));
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
        $productupdate->product_status_id  = $request->product_status_id;
        $productupdate->precio = $request->precio;
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
        $producteliminar = productos::find($id);
        $producteliminar->delete()  ;
        return back()->with ('eliminar','el producto ha sido eliminado');
    }
}
