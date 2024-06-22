<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PosController extends Controller
{
    //
    public function categoriaproductos()
    {
        //     // Obtener todas las categorías
        //     $categorias = Categoria::all();

        //     // Depuración
        //    // dd($categorias);

        //     // Pasar las categorías a la vista
        //     return view('pos.index', compact('categorias'));

        // Obtener todas las categorías con el conteo de productos
        $categorias = Categoria::withCount('productos')->get();

        // Pasar las categorías a la vista
        return view('pos.index', compact('categorias'));
    }

    public function getProductsByCategory($id)
    {
        // Obtener los productos de la categoría con el ID proporcionado
        $productos = Producto::where('id_categoria', $id)->with('categoria')->get();

        // Iterar sobre los productos para ajustar la URL de la imagen si existe
        $productos->transform(function ($producto) {
            // Verificar si la imagen existe y configurar la URL completa
            if ($producto->imagen) {
                $producto->imagen_url = Storage::url('public/product/' . $producto->imagen);
            } else {
                $producto->imagen_url = null; // Opcional: manejar caso sin imagen
            }

            return $producto;
        });

        // Devolver la respuesta JSON con los productos y la información de categoría
        return response()->json($productos);
    }

    // Método para obtener todos los productos
    public function todosLosProductos()
    {
         // Obtener todos los productos con la información de la categoría relacionada
         $productos = Producto::with('categoria')->get();

         // Iterar sobre los productos para ajustar la URL de la imagen si existe
         $productos->transform(function ($producto) {
             // Verificar si la imagen existe y configurar la URL completa
             if ($producto->imagen) {
                 $producto->imagen_url = Storage::url('public/product/' . $producto->imagen);
             } else {
                 $producto->imagen_url = null; // Opcional: manejar caso sin imagen
             }
 
             return $producto;
         });
 
         // Devolver la respuesta JSON con los productos y la información de categoría
         return response()->json($productos);
     
    }
}
