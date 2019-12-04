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
        Route::get('/product_img/{id}', 'Product_imgController@create')->name('create.product_img');
        Route::resource('/product_img', 'Product_imgController');

        Route::resource('/category', 'categoryController');
        Route::resource('/subcategory', 'subcategoryController');

        Route::get('/category_product/{id}', 'category_productController@create')->name('create.category_product');
        Route::resource('/category_product', 'category_productController');

        Route::resource('/admin/blog', 'BlogController');
        Route::resource('/admin/blogCategory', 'BlogCategoryController');

        Route::resource('users', 'UserController');
        Route::get('admin-list-excel','reportsController@exportExcel')->name('reports.excel');
        Route::post('/description', 'DescriptionProductController@store')->name('descriptions.store');

        Route::get('/vistaComment/{id}','MostrarblogController@vistaComment')->name('vistaComment');

        Route::get('/descriptions/{id}', 'descriptions_productController@create')->name('create.descriptions');
        Route::get('/descriptions/{id}/{product}', 'descriptions_productController@edit')->name('edit.descriptions');
        Route::resource ('/descriptions' , 'descriptions_productController' );

        Route::resource('users', 'UserController');
        Route::get('admin-list-excel','reportsController@exportExcel')->name('reports.excel');
        Route::resource('/admin/carrousel', 'CarrouselController');



        //cliente-----*
        Route::get('cliente','HomeController@cliente')->name('cliente');

        Route::get('visistacategoriauser/{category}/{subcategory?}','categoryusersController@checkcategoryuser')->name('visistacategoriauser');
        route::view('/grominguser','user/views/grominguser')->name('grominguser');
        Route::get('/vistaperfil', 'updateuserController@vistaperfil')->name('vistaperfil');
        Route::post('/updateuser/{id}','updateuserController@updateuser')->name('updateuser');
        Route::post('/mascota/{id}','updateuserController@mascotas')->name('mascota');

        route::view('/veterinariauser','user/views/veterinariauser')->name('veterinariauser');
        route::get('/descripcionuser/{producto}','descriptions_productController@index')->name('descripcionuser');

        /*blog*/
        Route::get('/bloguser','MostrarblogController@indexuser')->name('bloguser');
        Route::get('/blogview/{id}','MostrarblogController@blogview')->name('blogview');
        Route::post('/commentBlog/{user}/{blog}',[ 'uses'=>'MostrarblogController@commentBlog', 'as' => 'commentBlog' ]);

        /*lista deseos */
        route::get('/lista','listaController@index')->name('lista');
        route::get('listadeseos/{producto}/{user}', [ 'uses'=>'listaController@store', 'as' => 'listadeseos' ]);
        route::get('listdelete/{id}/', [ 'uses'=>'listaController@destroy', 'as' => 'listdelete' ]);

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


    route::get('description/{id}', 'DescriptionProductController@visitors')->name('description.visitors');
    #route::get('/descripcion', 'ProductController@descriptionProduct');
    route::view('/blog','visitante/blog')->name('blog');
    route::view('/descripcion','visitante/descripcion')->name('descripcion');
    Route::resource('/mostrarblog','MostrarblogController');


    //FIN ADMINISTRADOR


        //rutas visitantes
        route::get('vistascategorias/{name}/{subcategory?}','viewsCategoryController@checkcategories')->name('vistascategorias');
        route::view('/groming','visitante/groming')->name('groming');
        route::view('/Veterinaria','visitante/Veterinaria')->name('Veterinaria');
        route::view('/about','visitante/about')->name('about');
        route::view('/politicas','visitante/politicas')->name('politicas');
        route::get('/descripcion/{producto}','viewsCategoryController@descripcion')->name('descripcion');
        /*blog*/
        Route::get('/mostrarblog','MostrarblogController@index')->name('mostrarblog');
        Route::get('/viewblog/{id}','MostrarblogController@viewblog')->name('viewblog');
