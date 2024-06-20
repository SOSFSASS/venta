<?php

use App\Models\Categoria;
use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('panel.index');
// });
Route::view('/', 'panel.index')->name('panel');
Route::view('/login', 'panel.login')->name('login');
Route::view('categoria', 'categoria.index')->name('categoria');

// Route::controller(CategoriaController::class)->group(function (){
//     Route::post('/categoria', 'all');
//     Route::post('/categoria', 'store');
//     Route::post('/categoria', 'edit');
//     Route::post('/categoria', 'update');
//     Route::post('/categoria', 'destroy');
// })

Route::controller(CategoriaController::class)->group(function () {
    Route::get('/categoria', 'index')->name('categoria.index');
    Route::get('/categoria/create', 'create')->name('categoria.create');
    Route::post('/categoria', 'store')->name('categoria.store');
    Route::get('/categoria/{id}/edit', 'edit')->name('categoria.edit');
    Route::put('/categoria/{id}', 'update')->name('categoria.update');
    Route::delete('/categoria/{id}', 'destroy')->name('categoria.destroy');
});
