<?php

namespace App\Http\Controllers;

use App\category_product;
use App\productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class viewsCategoryController extends Controller
{
    public function checkcategories($name)
    {
        $query = category_product::join('productos', 'category_product.product_id', '=', 'productos.id')
            ->join('categorys', 'category_product.category_id', '=', 'categorys.id')
            ->where('categorys.name', $name)
            ->select('productos.*', 'categorys.name as categoria')
            ->paginate(8);
        $name =  str_replace('%20', ' ', $name);

        switch ($name){
            case 'perros':
                return view('visitante/categorysvisit', compact('query'));
            break;

            case 'gatos':
                if ($name == 'gatos'){
                    return view('visitante/categorysvisit', compact('query'));
                }
            break;

            case 'otras mascotas':
                if ($name == 'otras mascotas'){
                    return view('visitante/categorysvisit', compact('query'));
                }
            break;
        }
    }
}
