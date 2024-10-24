<?php

namespace App\Http\Controllers;

use App\Models\TiposProductos;
use Illuminate\Http\Request;

class TiposProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ingrediente = TiposProductos::all();
        return view('listaProductos', compact('tiposProductos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tipoProducto=TiposProductos::create([
            'id' => $request->id,
            'nombre' => $request->nombre
            ] 
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(TiposProductos $tiposProductos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TiposProductos $tiposProductos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TiposProductos $tiposProductos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TiposProductos $tiposProductos)
    {
        //
    }
}
