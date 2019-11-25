<?php

namespace App\Http\Controllers;

use App\category_product;
use App\productos;
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
        $name = $category;
        return view('visitante/categorysvisit', compact('query','name'));

    }

}
