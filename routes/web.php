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
        Route::resource('/product-category', 'Product_categorysController');

        Route::resource('/admin/blog', 'BlogController');
        Route::view('/users','user/users')->name('users');
    });


    Route::view('/blogAdmin','admin/blogAdmin')->name('blogAdmin');
    //FIN ADMINISTRADOR




    //vista de home menu rutas
    route::view('/perro','visitante/perro')->name('perro');
    route::view('/gato','visitante/gato')->name('gato');
    route::view('/otros','visitante/otros')->name('otros');
    route::view('/groming','visitante/groming')->name('groming');
    route::view('/politicas','visitante/politicas')->name('politicas');
    route::view('/blog','visitante/blog')->name('blog');
    route::view('/descripcion','visitante/descripcion')->name('descripcion');



