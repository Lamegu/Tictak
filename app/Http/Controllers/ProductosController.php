<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use App\Models\TiposProductos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Productos::all();
        $tiposProductos = TiposProductos::all();

        return view('admin.listaProductos', compact('productos', 'tiposProductos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tiposProductos = TiposProductos::all();
        return view('admin.crearProducto', compact('tiposProductos'));
    }

    public function save(Request $request)
    {
        // Lógica para almacenar un nuevo producto
        $producto = Productos::create([
            'nombre' => $request->nombre,
            'imagen'=> $request->imagen,
            'descripcion'=> $request->descripcion,
            'precio'=> $request->precio,
            'ingredientes'=> $request->ingredientes,
            'tipo_producto_id'=> $request->tipo_producto_id
            ] 
        );
        return redirect()->route('listaProductos')->with('success', 'Producto creado exitosamente');
       
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Lógica para almacenar un nuevo producto
        Productos:: create ($request->all());
        return redirect()->route('listaProductos')->with('success', 'Producto creado exitosamente');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $producto = Productos::find($id);
        $tiposProductos = TiposProductos::all();

        return view('admin.actualizarProducto', compact('producto', 'tiposProductos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $producto = Productos::find($id);
        $producto->update($request->all());

        return redirect()->route('listaProductos')->with('success', 'Producto actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    // En ProductosController.php
    public function confirmarEliminar($id)
    {
        $producto = Productos::find($id);
        return view('admin.confirmarEliminarProducto', compact('producto'));
    }

    public function destroy($id)
    {
        $producto = Productos::find($id);
        $producto->delete();
        return redirect()->route('listaProductos')->with('success', 'Producto eliminado exitosamente');
    }
}
