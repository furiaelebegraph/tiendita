<?php

namespace App\Http\Middleware;

use Closure;
use App\ShoppingCart;

class SetShoppingCart
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $sessionName = 'shopping_carts_id';
        $super_id_carrin = \Session::get($sessionName);
        $sesion_carrito = ShoppingCart::findoOrCreateById($super_id_carrin);

        \Session::put($sessionName, $sesion_carrito->id);

        $request->carrito_id = $sesion_carrito;
        $request->potato = 'potatin';
        return $next($request);
    }
}
