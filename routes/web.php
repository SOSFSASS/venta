<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('panel.index');
// });
Route::view('/', 'panel.index')->name('panel');
Route::view('categoria', 'categoria.index')->name('categoria');
