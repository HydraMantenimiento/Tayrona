<?php

namespace App\Http\Controllers;

use App\category;
use App\category_product;
use App\descriptions_product;
use App\lista;
use App\product_img;
use App\product_status;
use App\Subcategory;
use Illuminate\Http\Request;
use App\productos;
use Illuminate\Support\Facades\Auth;

class listaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::User()->id;
        $deseos = lista::where('user_id','=',$user)->get();
        $producto = productos::all();
        return view('user/views/lista', compact('user', 'deseos','producto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , $producto , $user )
    {
        $lista = lista::where('product_id',$producto)->get();

        if(count($lista) == 0){
            $listas = new lista;
            $listas->product_id = $producto;
            $listas->user_id =  $user;
            $listas->save();
            return back();
        }
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
        $listas = lista::find($id);
        $listas->delete();
        return redirect()->route('lista')->with('alert','El producto fue eliminado correctamente.');
    }
}

