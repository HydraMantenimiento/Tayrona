<?php

namespace App\Http\Controllers;

use App\category_product;
use Illuminate\Http\Request;

class categoryusersController extends Controller
{
    public function checkcategoryuser($name)
    {
        $query = category_product::join('productos', 'category_product.product_id', '=', 'productos.id')
            ->join('categorys', 'category_product.category_id', '=', 'categorys.id')
            ->where('categorys.name', $name)
            ->select('productos.*', 'categorys.name as categoria')
            ->paginate(8);
        $name =  str_replace('%20', ' ', $name);
        if ($name == 'perros'){
            return view('user/views/viewscategories', compact('query'));
        }
        else{
            if ($name == 'gatos'){
                return view('user/views/viewscategories', compact('query'));
            }else{
                if ($name == 'otras mascotas'){
                    return view('user/views/viewscategories', compact('query'));
                }
            }
        }
    }

    public function checksubcategoryusers($name , $subcate){
        $query = category_product::join('productos', 'category_product.product_id', '=', 'productos.id')
            ->join('categorys', 'category_product.category_id', '=', 'categorys.id')
            ->join('subcategorys', 'productos.subcategory_id', '=', 'subcategorys.id')
            ->where('categorys.name', $name)
            ->where('subcategorys.name', $subcate)
            ->select('productos.*', 'categorys.name as categoria','subcategorys.name as sub')
            ->paginate(8);
        $name =  str_replace('%20', ' ', $name);

        switch ($name){
            case 'perros':
                if ($name == 'perros' && $subcate == 'alimentos'){
                    return view('user/views/viewssubcategories', compact('query'));
                }
                else{
                    if ($name == 'perros' && $subcate == 'accesorios'){
                        return view('user/views/viewssubcategories', compact('query'));
                    }else{
                        if ($name == 'perros' && $subcate == 'aseo'){
                            return view('user/views/viewssubcategories', compact('query'));
                        }else{
                            if ($name == 'perros' && $subcate == 'juguetes'){
                                return view('user/views/viewssubcategories', compact('query'));
                            }else{
                                if ($name == 'perros' && $subcate == 'drogueria'){
                                    return view('user/views/viewssubcategories', compact('query'));
                                }
                            }
                        }
                    }
                }
             break;

            case 'gatos':
                if ($name == 'gatos' && $subcate == 'alimentos'){
                    return view('user/views/viewssubcategories', compact('query'));
                }
                else{
                    if ($name == 'gatos' && $subcate == 'accesorios'){
                        return view('user/views/viewssubcategories', compact('query'));
                    }else{
                        if ($name == 'gatos' && $subcate == 'aseo'){
                            return view('user/views/viewssubcategories', compact('query'));
                        }else{
                            if ($name == 'gatos' && $subcate == 'juguetes'){
                                return view('user/views/viewssubcategories', compact('query'));
                            }else{
                                if ($name == 'gatos' && $subcate == 'drogueria'){
                                    return view('user/views/viewssubcategories', compact('query'));
                                }
                            }
                        }
                    }
                }
            break;

            case 'otras mascotas':
                if ($name == 'otras mascotas' && $subcate == 'alimentos'){
                    return view('user/views/viewssubcategories', compact('query'));
                }
                else{
                    if ($name == 'otras mascotas' && $subcate == 'accesorios'){
                        return view('user/views/viewssubcategories', compact('query'));
                    }else{
                        if ($name == 'otras mascotas' && $subcate == 'aseo'){
                            return view('user/views/viewssubcategories', compact('query'));
                        }else{
                            if ($name == 'otras mascotas' && $subcate == 'juguetes'){
                                return view('user/views/viewssubcategories', compact('query'));
                            }else{
                                if ($name == 'otras mascotas' && $subcate == 'drogueria'){
                                    return view('user/views/viewssubcategories', compact('query'));
                                }
                            }
                        }
                    }
                }
            break;
        }

    }
}
