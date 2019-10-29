<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;//este lo importe

/*ESTE LO COLOQUE*/

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //ESTE LO COLOQUE YO
        Schema::defaultStringLength(191);
        view::share('theme','lte');//este es para lo de las vistas

    }
}
