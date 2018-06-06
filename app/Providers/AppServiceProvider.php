<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\ShoppingCart;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*',function($view){

            $autorpotato = 'potato';
            $sessionName = 'shopping_carts_id';
            $super_id_carrin = \Session::get($sessionName);
            $sesion_carrito = ShoppingCart::findoOrCreateById($super_id_carrin);
            \Session::put($sessionName, $sesion_carrito->id);
            $canallin = $sesion_carrito->id;
            $conteoProdu = $sesion_carrito->contarProductos();

            $view->with(compact('autorpotato', 'canallin', 'conteoProdu'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
