<?php


use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PosController;
use Illuminate\Support\Facades\Route;
// Route::get('/', function () {
//     return view('template');
// });

Route::view('panel', 'panel.index')->name('panel');
// Route::view('pos', 'pos.index')->name('pos');

// Route::get('/', function () {
//     return view('panel.index');
// });
// Route::view('/', 'panel.index')->name('panel');
// Route::view('/login', 'panel.login')->name('login');
// Route::view('categoria', 'categoria.index')->name('categoria');


Route::controller(CategoriaController::class)->group(function () {
    Route::get('/categoria', 'index')->name('categoria.index');
    Route::get('/categoria/create', 'create')->name('categoria.create');
    Route::post('/categoria', 'store')->name('categoria.store');
    Route::get('/categoria/{id}/edit', 'edit')->name('categoria.edit');
    Route::put('/categoria/{id}', 'update')->name('categoria.update');
    Route::delete('/categoria/{id}', 'destroy')->name('categoria.destroy');
});




Route::controller(ProductoController::class)->group(function () {
    Route::get('producto', 'index')->name('producto.index');
    Route::get('producto/create', 'create')->name('producto.create');
    Route::post('producto', 'store')->name('producto.store');
    Route::get('producto/{id}', 'show')->name('producto.show');
    Route::get('producto/{id}/edit', 'edit')->name('producto.edit');
    Route::put('producto/{id}', 'update')->name('producto.update');
    Route::delete('producto/{id}', 'destroy')->name('producto.destroy');
    Route::get('/generar-etiqueta-producto', 'generarEtiquetaProducto')->name('generar-etiqueta-producto');
    Route::get('/products/{id}/barcode', 'generateBarcode')->name('productos.barcode');
    Route::post('/generar-codigo-unico', 'generarCodigoUnico')->name('generarCodigoUnico');
    Route::get('/generar-etiqueta-producto', 'generarEtiquetaProducto')->name('generar-etiqueta-producto');
});


Route::controller(ClienteController::class)->group(function () {
    Route::get('/cliente', 'index')->name('cliente.index');
    Route::get('/cliente/create', 'create')->name('cliente.create');
    Route::post('/cliente', 'store')->name('cliente.store');
    Route::get('/cliente/{id}/edit', 'edit')->name('cliente.edit');
    Route::put('/cliente/{id}', 'update')->name('cliente.update');
    Route::delete('/cliente/{id}', 'destroy')->name('cliente.destroy');
});


Route::controller(PosController::class)->group(function () {
    // Route::get('pos', 'pos.index')->name('pos');
    Route::get('pos', 'categoriaproductos')->name('pos');
    Route::get('/productos/categoria/{id}', 'getProductsByCategory');
    // Ruta para obtener todos los productos
    Route::get('/productos/todos', 'todosLosProductos');
    // Route::get('/buscarCliente','buscarCliente');
    Route::get('/buscarCliente', 'buscarCliente')->name('buscarCliente');
    Route::post('/buscarProductos', 'buscarProductos')->name('buscarProductos');
});
