<?php

namespace App\Http\Controllers;

use App\Models\productos;
use Illuminate\Http\Request;
use App\Models\tipo_producto;
class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
     // $productos = productos::all();
      // $productos = tipo_producto::with(['productos'])->get();
      //$product = tipo_Producto::all()->productos;

      $productos = \DB::table('productos')->select('productos.id','productos.marca','productos.modelo','productos.precio','productos.stock',
                    'tipo_producto.nombre')
            ->join('tipo_producto','tipo_producto.id', '=', 'productos.tipoproducto_id')->get();
     

        return view('producto.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $datos['tipoProducto'] = tipo_producto::paginate(5);
        //$datos = DB::table('tipo_producto')->get();
        //echo( $datos);
        
       return view('producto.create',$datos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
      //var_dump($datosProducto);

       $producto = new Productos();
       $producto->marca = $request->get('marca');
       $producto->modelo = $request->get('modelo');
       $producto->precio = $request->get('precio');
       $producto->stock = $request->get('stock');
       $producto->tipoproducto_id = $request->get('tipodeproducto');
       $producto->save();
       return redirect('/productos');

    //    productos::insert();
       // return response()->json($datosProducto);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $productoBuscado = productos::findOrFail($id);
        $tipoProducto = tipo_producto::paginate(5);  
        return view('producto.edit', compact('productoBuscado','tipoProducto' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $productos = productos::findOrFail($id);
        $productos->marca = $request->marca;
        $productos->modelo = $request->modelo;
        $productos->precio = $request->precio;
        $productos->stock = $request->stock;
        $productos->tipoproducto_id = $request->tipodeproducto;
        $productos->updated_at = null;
        $productos->save();
        return redirect('productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        productos::destroy($id);
        
         //$product = productos::findOrFail($id);
            
        return redirect('productos');
    

     //   return redirect()->route('productos.index')
       //     ->with('success', 'Producto deleted successfully');
        
    }
}
