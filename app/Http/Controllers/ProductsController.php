<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth', ['except' => ['index','show']]);        
    }


    public function index(Request $request){
        $productos = Product::paginate(15);
        if($request->wantsJson()){
            return $productos->toJson();
        }

        return view('products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $this->validate($request,[
            'nombre' => 'required|max:191',
            'descripcionCorta' => 'required',
            'descripcion' => 'required',
            'caratula' => 'required| image | max:2000',
            'sku' => 'required',
            'precio' => 'required',
        ]);



        $product = new Product;
        if($request->hasFile('caratula')){
            $nombreImagen = preg_replace('/\s/', '', $request->caratula->getClientOriginalName());
            $nombreImagen = time().'-'.$nombreImagen;
            $request->caratula->move("/img/producto/",$nombreImagen );
            $nombreImagen = 'producto/'.$nombreImagen;
            $product->caratula = $nombreImagen;

        }
        $product->nombre = $request->nombre;
        $product->descripcionCorta = $request->descripcionCorta;
        $product->descripcion = $request->descripcion;
        $product->sku = $request->sku;
        $product->precio = $request->precio;

        if($product->save()){
            return redirect('producto')->with('mensaje','Se ha creado un nuevo producto');
        }else{
            return redirect()->back()->with("mensaje",'No se pudo crear el producto')->withInput();
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        return view('products.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $productos = Products::findOrFail($id);
        return view('products.edit', compact('productos'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $productos = Products::findOrFail($id);
        return view('products')->with('mensaje', 'Se ha actualizado el producto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        return view('products');
    }
    protected function validador(array $data)
    {
        return Validator::make($data, [
            'nombre' => 'required|max:255',
            'correo' => 'required|email|max:255|unique:sellers',
            'password' => 'required|min:6|confirmed',
            'telefono' => 'required|min:6',
            'direccion' => 'required|min:6',
            'nss' => 'required|min:6',
        ]);
    }
}
