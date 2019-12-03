<?php

namespace App\Http\Controllers;

use App\category;
use App\category_product;
use App\productos;
use foo\bar;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class category_productController extends Controller
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
        $category = category::all();
        return view('admin/products/category/create',compact('product', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category_products = category_product::where('product_id',$request->productid)
            ->where('category_id',$request->categoria)
            ->get();
        if(count($category_products) == 0){
            $category_products = new category_product;
            $category_products ->product_id = $request->productid;
            $category_products ->category_id = $request->categoria;
            $category_products ->save();
            return back()->with('alert','La categoria fue agregada correctamente.');
        }
        return back()->with('alert','La categoria ya se encuentra agregada correctamente.');;
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
    public function update(Request $request, $id)
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
        $destroy = category_product::find($id);
        $destroy->delete();
        return back();
    }
}
