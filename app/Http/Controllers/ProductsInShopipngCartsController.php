<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductInShhoppingCart;

class ProductsInShopipngCartsController extends Controller
{
	public function __construct(){
		$this->middleware('choping_cart');

	}
    public function store(Request $request){
    	$en_choping_cart = ProductInShhoppingCart::create([
    		'shopping_cart_id'=> $request->carrito_id->id,
    		'product_id' => $request->id_product,
    	]);

    	if($en_choping_cart){
    		return redirect()->back()->with(['mensajitoAgregar' => 'Suave suavecito']);
    	}else{
    		return redirect()->back()->withErrors(['product'=>'No se pudo agregar el producto']);
    	}
    }
    public function destroy($id){

    }
}
