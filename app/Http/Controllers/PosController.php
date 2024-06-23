<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Cliente;
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
        // Obtener los productos de la categoría con el ID proporcionado y estado diferente de 0
        $productos = Producto::where('id_categoria', $id)
            ->where('estado', '<>', 0)
            ->with('categoria')
            ->get();

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
        // Obtener todos los productos con estado diferente de 0 y la información de la categoría relacionada
        $productos = Producto::where('estado', '<>', 0)
            ->with('categoria')
            ->get();

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


    // public function buscarCliente(Request $request)
    // {
    //    // Obtener el término de búsqueda del request
    // $search = $request->input('search');

    // // Inicializar la consulta de clientes
    // $clientes = Cliente::query();

    // // Aplicar el filtro de búsqueda si hay término de búsqueda
    // if (!empty($search)) {
    //     $clientes->where('nombre', 'like', '%' . $search . '%')
    //             ->orWhere('apellido', 'like', '%' . $search . '%')
    //             ->orWhere('documento', 'like', '%' . $search . '%')
    //             ->orWhere('correo', 'like', '%' . $search . '%');
    // }


    // // Retornar la vista con los clientes paginados y el término de búsqueda
    // return view('pos.index', compact('clientes', 'search'));
    // }

    // public function buscarCliente(Request $request)
    // {
    //     // Obtener el término de búsqueda del request
    //     $search = $request->input('search');

    //     // Inicializar la consulta de clientes
    //     $clientes = Cliente::query();

    //     // Aplicar el filtro de búsqueda si hay término de búsqueda
    //     if (!empty($search)) {
    //         $clientes->where('nombre', 'like', '%' . $search . '%')
    //             ->orWhere('apellido', 'like', '%' . $search . '%')
    //             ->orWhere('documento', 'like', '%' . $search . '%')
    //             ->orWhere('correo', 'like', '%' . $search . '%');
    //     }

    //     // Obtener los resultados de la consulta
    //     $resultados = $clientes->get();

    //     // Retornar los resultados como JSON
    //     return response()->json($resultados);
    // }

    public function buscarCliente(Request $request)
{
    $search = $request->get('search');

    // Consulta para buscar el cliente más relevante
    $cliente = Cliente::where('nombre', 'like', '%' . $search . '%')
                      ->orWhere('apellido', 'like', '%' . $search . '%')
                      ->orWhere('documento', 'like', '%' . $search . '%')
                      ->orWhere('correo', 'like', '%' . $search . '%')
                      ->orderByRaw("CASE
                          WHEN nombre LIKE '$search%' THEN 1
                          WHEN apellido LIKE '$search%' THEN 2
                          WHEN documento LIKE '$search%' THEN 3
                          WHEN correo LIKE '$search%' THEN 4
                          ELSE 5
                          END")
                      ->first();

    return response()->json([$cliente]);
}
}
