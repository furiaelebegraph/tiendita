<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    public static function findoOrCreateById($id_carrito){
    	if($id_carrito){
    		return ShoppingCart::find($id_carrito);
    	}else{
    		return ShoppingCart::create();
    	}
    }
    public function products(){
    	return $this->belongsToMany('App\Product', 'product_in_shhopping_carts');
    }
    public function contarProductos(){
    	return $this->products()->count();
    }
}
