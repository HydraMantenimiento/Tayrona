<?php

namespace App\Http\Controllers;

use App\product_img;
use App\productos;
use App\Http\Requests\imagenRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class product_imgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $product = productos::find($id);
        return view('admin/products/product_img/create',compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $productimg = new product_img;
        $productimg ->product_id = $request->productid;
        if ( $request->file('avatar')){
            $path = Storage::disk('public')->put('upload', $request->file('avatar'));
            $productimg->url = $path;
        }
        $productimg->save();

        return back()->with('alert','La Imagen fue agregada correctamente.');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request )
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //product_img::destroy($id);
        $imgdelete = product_img::find($id);
        $imgdelete->delete();
        return back();
    }
}
