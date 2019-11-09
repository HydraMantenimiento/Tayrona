<?php

namespace App\Http\Controllers;


use App\category;
use App\category_product;
use App\descriptions_product;
use App\product_img;
use App\product_status;
use App\Subcategory;
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
        $product = productos::paginate(5);
        $status = product_status::all();
        $category = category::all();
        $subcategory = Subcategory::all();
        $category_product = category_product::all();
        return  view('admin/product', compact('product','status','category','subcategory','category_product') );
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
        $productoagregar->subcategory_id  = $request->subcategorias;
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
        $product = productos::find($id);
        $status = product_status::all();

        return view('admin/productshow', compact('product','status'));
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
        $descripcion = descriptions_product::where('product_id', $id)->get();
        $category = category::all();
        $status = product_status::all();
        $category_product = category_product::where('product_id', $id)->get();
        return view('admin/producteditar', compact('productactualizar', 'img','category','category_product','status','descripcion'));
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
     *S
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producteliminar = productos::find($id);
        $producteliminar->delete();
        return back()->with ('eliminar','el producto ha sido eliminado');
    }
}
