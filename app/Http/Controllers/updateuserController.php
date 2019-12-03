<?php

namespace App\Http\Controllers;

use App\mascota;
use App\subcategorys;
use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class updateuserController extends Controller
{

    public function vistaperfil()
    {
        $user = Auth::User();
        $mascotas = mascota::where('user_id','=',$user->id)->get();
        return view('user/views/update', compact('user', 'mascotas'));
    }

    public function  updateuser(Request $request, $id)
    {
        if ($request->file('avatar')){

            $path = Storage::disk('public')->put('imageFolders/userImage', $request->file('avatar'));
            $user = User::find($id);
            $user->avatar =  $path;
            $user->save();
        }
        $datos = request()->except(['_token', 'avatar']);
        User::where('id','=',$id)->update($datos);
        return redirect()->back();

    }

    public function mascotas(Request $request, $id){
        $mascota = new mascota;

        $mascota->user_id = $id;
        $mascota->name = $request->name;
        $mascota->edad = $request->edad;
        if ( $request->file('avatar')){
            $path = Storage::disk('public')->put('imageFolders/mascotas', $request->file('avatar'));
            $mascota->avatar = $path;
        }
        $mascota->save();
        return back();
    }



}
