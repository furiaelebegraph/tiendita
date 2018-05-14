<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $fillable = ['nombre', 'precio', 'descripcionCorta', 'descripcion', 'caratula', 'sku'];
}
