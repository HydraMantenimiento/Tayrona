<?php

namespace App\Http\Controllers;

use App\category_product;
use App\product_img;
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

    public function checksubcategoryvisit($name , $subcate)
    {
        $query = category_product::join('productos', 'category_product.product_id', '=', 'productos.id')
            ->join('categorys', 'category_product.category_id', '=', 'categorys.id')
            ->join('subcategorys', 'productos.subcategory_id', '=', 'subcategorys.id')
            ->where('categorys.name', $name)
            ->where('subcategorys.name', $subcate)
            ->select('productos.*', 'categorys.name as categoria', 'subcategorys.name as sub')
            ->paginate(8);
        $name = str_replace('%20', ' ', $name);

        switch ($name) {
            case 'perros':
                if ($name == 'perros' && $subcate == 'alimentos') {
                    return view('visitante/categorysvisit', compact('query','name'));
                } else {
                    if ($name == 'perros' && $subcate == 'accesorios') {
                        return view('visitante/categorysvisit', compact('query','name'));
                    } else {
                        if ($name == 'perros' && $subcate == 'aseo') {
                            return view('visitante/categorysvisit', compact('query','name'));
                        } else {
                            if ($name == 'perros' && $subcate == 'juguetes') {
                                return view('visitante/categorysvisit', compact('query','name'));
                            } else {
                                if ($name == 'perros' && $subcate == 'drogueria') {
                                    return view('visitante/categorysvisit', compact('query','name'));
                                }
                            }
                        }
                    }
                }
                break;

            case 'gatos':
                if ($name == 'gatos' && $subcate == 'alimentos') {
                    return view('user/views/viewssubcategories', compact('query'));
                } else {
                    if ($name == 'gatos' && $subcate == 'accesorios') {
                        return view('user/views/viewssubcategories', compact('query'));
                    } else {
                        if ($name == 'gatos' && $subcate == 'aseo') {
                            return view('user/views/viewssubcategories', compact('query'));
                        } else {
                            if ($name == 'gatos' && $subcate == 'juguetes') {
                                return view('user/views/viewssubcategories', compact('query'));
                            } else {
                                if ($name == 'gatos' && $subcate == 'drogueria') {
                                    return view('user/views/viewssubcategories', compact('query'));
                                }
                            }
                        }
                    }
                }
                break;

            case 'otras mascotas':
                if ($name == 'otras mascotas' && $subcate == 'alimentos') {
                    return view('user/views/viewssubcategories', compact('query'));
                } else {
                    if ($name == 'otras mascotas' && $subcate == 'accesorios') {
                        return view('user/views/viewssubcategories', compact('query'));
                    } else {
                        if ($name == 'otras mascotas' && $subcate == 'aseo') {
                            return view('user/views/viewssubcategories', compact('query'));
                        } else {
                            if ($name == 'otras mascotas' && $subcate == 'juguetes') {
                                return view('user/views/viewssubcategories', compact('query'));
                            } else {
                                if ($name == 'otras mascotas' && $subcate == 'drogueria') {
                                    return view('user/views/viewssubcategories', compact('query'));
                                }
                            }
                        }
                    }
                }
                break;
        }
    }
    static public function  productImg($id)
    {
        $img = product_img::find($id, ['url']);
        return $img;
    }
}
