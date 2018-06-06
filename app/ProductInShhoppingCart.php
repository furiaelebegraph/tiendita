<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductInShhoppingCart extends Model
{
    protected $fillable = [
        'product_id', 'shopping_cart_id', 'amount',
    ];
}
