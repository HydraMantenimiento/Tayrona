<?php

    //no tocar rutas

    Route::get('/', 'HomeController@home')->name('inicio');
    Route::get('/home', 'HomeController@index')->name('home');

    //Verificacion de email
    Auth::routes(['verify' => true]);
    Route::group(['middleware' => 'verified', 'auth'], function () {

        Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
        Route::resource('/product', 'ProductController');

        Route::resource('/product-img', 'Product_imgController');
        Route::resource('/category', 'categoryController');
        Route::resource('/subcategory', 'subcategoryController');
        Route::resource('/category_product', 'category_productController');
        Route::resource('/admin/blog', 'BlogController');
        Route::resource('users', 'UserController');
        Route::get('admin-list-excel','reportsController@exportExcel')->name('reports.excel');


        //cliente-----*
        Route::get('cliente','HomeController@cliente')->name('cliente');
        Route::get('/checkcategoryuser/{name}','categoryusersController@checkcategoryuser')->name('vis');
        Route::get('checksubcategoryusers/{name}/{subcate}','categoryusersController@checksubcategoryusers')->name('sub');
        Route::resource('/descriptions','descriptions_productController');
        route::view('/grominguser','user/views/grominguser')->name('grominguser');
        route::view('/veterinariauser','user/views/veterinariauser')->name('veterinariauser');
        route::view('/bloguser','user/views/bloguser')->name('bloguser');
        route::get('/descripcionuser/{producto}','descriptions_productController@index')->name('descripcionuser');

        /* carro de compras*/
        Route::get('/add-to-car/{id}',[
            'uses' => 'CartproductsController@getAddToCart',
            'as'   => 'product.addToCart'
        ]);


    });

    Route::view('/blogAdmin','admin/blogAdmin')->name('blogAdmin');
    //FIN ADMINISTRADOR

    //vista de home menu rutas
    route::get('/perro/{name}','viewsCategoryController@checkcategories')->name('vistascategorias');


   // route::view('/otros','visitante/otros')->name('otros');

    route::view('/groming','visitante/groming')->name('groming');
    route::view('/politicas','visitante/politicas')->name('politicas');
    route::view('/blog','visitante/blog')->name('blog');
    route::view('/descripcion','visitante/descripcion')->name('descripcion');



