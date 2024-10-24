<?php

use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ProductosIngredientesControllerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('plantilla');
})->name('inicio');

Route::get('/vegetariano', function () {
    return view('vegetariano');
})->name('vegetariano');

Route::get('/gourmet', function () {
    return view('gourmet');
})->name('gourmet');

Route::get('/login', function () {
    return view('login');
})->name('login');



//Lista de productos
Route::get('/admin/listaProductos', [ProductosController::class, 'index'])->name('listaProductos');
//Actualizar producto
Route::get('/admin/actualizarProducto/{id}', [ProductosController::class, 'edit'])->name('actualizarProducto');
Route::put('/admin/actualizarProducto/{id}', [ProductosController::class, 'update'])->name('actualizarProducto');
//Eliminar producto
// En web.php
Route::get('/confirmarEliminarProducto/{id}', [ProductosController::class, 'confirmarEliminar'])->name('confirmarEliminarProducto');
Route::delete('/eliminarProducto/{id}', [ProductosController::class, 'destroy'])->name('eliminarProducto');
//Crear Producto
Route::get('/admin/crearProducto', [ProductosController::class, 'create'])->name('crearProducto');
Route::post('/admin/crearProducto', [ProductosController::class, 'save'])->name('saveProducto');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
