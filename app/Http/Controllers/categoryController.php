<?php

namespace App\Http\Controllers;

use App\category;
use App\productos;
use App\Subcategory;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index()
    {
        $categorias = category::all();
        $subcategorias = Subcategory::all();
        return  view('admin/category', compact('categorias','subcategorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new category;
        $category->name = $request->categoria;
        $category->save();
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorydestroy = category::find($id);
        $categorydestroy -> delete();
        return back()->with('agregar','El producto se ha agregado');
    }
}
