<?php

namespace App\Http\Controllers;

use App\Carrousel;
use App\carrousels;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class carrouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carrousels = Carrousel::all();
        return view('admin/slider/index', compact('carrousels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/slider/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carrousels = new Carrousel();

        if ( $request->file('imagen')){
            $path = Storage::disk('public')->put('imageFolders/carrouselImagenes', $request->file('imagen'));
            $carrousels->img = $path;
        }
        $carrousels->title = $request->title;
        $carrousels->description = $request->descripcion;
        $carrousels->status = 'active';
        $carrousels->save();
        return redirect()->route('carrousel.index')->with('alert','El carrousel fue creado correctamente.');
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
        $carrousels = Carrousel::find($id);
        return view('admin/slider/edit', compact('carrousels'));
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

        $carrousels = Carrousel::FindOrFail($id);
        if ($request->hasFile('imagen')){
            $imagen=  $request->file('imagen');
            $filename = time() . '.' . $imagen->getClientOriginalExtension();
            $imagen->move('carrouselImagenes'.$filename);
            $carrousels->img = $filename;
        }

        $carrousels->title = $request->title;
        $carrousels->description = $request->descripcion;
        $carrousels->status = 'active';
        $carrousels->save();
        return redirect()->route('carrousel.index')->with('alert','El carrousel fue modificado correctamente.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Carrousel::find($id);
        $blog->delete();
        return redirect()->route('carrousel.index')->with('alert','El carrousel fue eliminado correctamente.');
    }
}
