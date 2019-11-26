<?php

    //rutas home
    Route::get('/', 'HomeController@home')->name('inicio');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/products', 'HomeController@products')->name('products');

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
        Route::resource('/admin/blogCategory', 'BlogCategoryController');
        Route::resource ('/descriptions' , 'descriptions_productController' );
        Route::resource('users', 'UserController');
        Route::get('admin-list-excel','reportsController@exportExcel')->name('reports.excel');


        //cliente-----*
        Route::get('cliente','HomeController@cliente')->name('cliente');

        Route::get('visistacategoriauser/{category}/{subcategory?}','categoryusersController@checkcategoryuser')->name('visistacategoriauser');
        route::view('/grominguser','user/views/grominguser')->name('grominguser');
        route::view('/veterinariauser','user/views/veterinariauser')->name('veterinariauser');
        route::view('/bloguser','user/views/bloguser')->name('bloguser');
        route::view('/blogview','user/views/blogview')->name('blogview');
        route::get('/descripcionuser/{producto}','descriptions_productController@index')->name('descripcionuser');

        //route::resource('/listadeseos','listadeseosController');

        /* carro de compras*/
        Route::get('/add-to-car/{id}',['uses' => 'CartproductsController@getAddToCart', 'as'   => 'product.addToCart']);
        Route::get('/shopping-cart',['uses' => 'CartproductsController@getCart', 'as'   => 'product.shoppingCart']);



        Route::post('/payments/pay', 'PaymentController@pay')->name('pay');
        Route::get('/payments/approval', 'PaymentController@approval')->name('approval');
        Route::post('/payments/cancelled', 'PaymentController@cancelled')->name('cancelled');

    });

    Route::view('/blogAdmin','admin/blogAdmin')->name('blogAdmin');
    //FIN ADMINISTRADOR


    //rutas visitantes
    route::get('vistascategorias/{name}/{subcategory?}','viewsCategoryController@checkcategories')->name('vistascategorias');
    route::view('/groming','visitante/groming')->name('groming');
    route::view('/Veterinaria','visitante/Veterinaria')->name('Veterinaria');
    route::view('/about','visitante/about')->name('about');
    route::view('/politicas','visitante/politicas')->name('politicas');


    route::view('/descripcion','visitante/descripcion')->name('descripcion');
    #route::get('/descripcion', 'ProductController@descriptionProduct');
    route::view('/blog','visitante/blog')->name('blog');
    route::view('/descripcion','visitante/descripcion')->name('descripcion');
    Route::resource('/mostrarblog','MostrarblogController');



