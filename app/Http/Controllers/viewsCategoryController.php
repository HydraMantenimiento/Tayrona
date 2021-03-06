<?php

namespace App\Http\Controllers;

use App\category_product;
use App\product_img;
use App\productos;
use App\Carrousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class viewsCategoryController extends Controller
{
    public function checkcategories($category, $subcategory = null)
    {
        $category =  str_replace('%20', ' ', $category);
        $query = category_product::join('productos', 'category_product.product_id', '=', 'productos.id')
            ->join('categorys', 'category_product.category_id', '=', 'categorys.id')
            ->join('subcategorys', 'productos.subcategory_id', '=', 'subcategorys.id')
            ->where('subcategorys.name', $subcategory ? $subcategory : '<>', Null)
            ->where('categorys.name', $category)
            ->select('productos.*', 'categorys.name as categoria', 'subcategorys.name as sub')
            ->paginate(8);
            $carrousels = Carrousel::all();
        $name = $category;
        return view('visitante/categorysvisit', compact('query','name', 'carrousels'));

    }


    static public function  productImg($id)
    {
        $img = product_img::find($id, ['url']);
        return $img;
    }
}
