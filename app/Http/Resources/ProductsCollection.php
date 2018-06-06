<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductsCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request){
        return[
            'data' => $this->collection->transform(function($element){
                return[
                    'nombre' => $element->nombre,
                    'sku' => $element->sku,
                    'id' => $element->id,
                    'caratula' => $element->caratula,
                    'precio' => "$".($element->precio/100),
                    'precioVenta' => $element->precio,
                    'descripcionCorta' => $element->descripcionCorta,
                    'descripcion' => $element->descripcion,
                ];
            })
        ];
    }
}
