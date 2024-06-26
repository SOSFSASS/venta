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


    // TODO: Funcion para obtener todos los productos
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


    //TODO: Funcion para Buscar clientes
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

    // public function buscarProductos(Request $request)
    // {
    //     $term = $request->input('term');

    //     // Buscar productos por nombre o código
    //     $productos = Producto::where('nombre', 'LIKE', "%{$term}%")
    //                         ->orWhere('codigo', 'LIKE', "%{$term}%")
    //                         ->where('estado', '<>', 0) // Asegúrate de que el producto esté activo
    //                         ->with('categoria')
    //                         ->get();

    //     return response()->json($productos);
    // }

    public function buscarProductos(Request $request)
    {
        $query = $request->input('query');
        
        // Verificar si se está buscando por código de barras
        if ($request->has('barcodeSearch') && $request->input('barcodeSearch') == 1) {
            // Realizar la búsqueda por código de barras
            $producto = Producto::where('codigo', $query)
                ->with('categoria')
                ->first();
    
            // Verificar si se encontró un producto y ajustar la URL de la imagen si existe
            if ($producto) {
                $producto->imagen_url = $producto->imagen ? Storage::url('public/product/' . $producto->imagen) : null;
                return response()->json($producto);
            } else {
                // Manejar el caso donde no se encuentra ningún producto
                return response()->json(['message' => 'Producto no encontrado'], 404);
            }
        } else {
            // Realizar la búsqueda por nombre o código
            $productos = Producto::where('estado', '<>', 0)
                ->where(function ($q) use ($query) {
                    $q->where('nombre', 'like', '%' . $query . '%')
                        ->orWhere('codigo', 'like', '%' . $query . '%');
                })
                ->with('categoria')
                ->get();
    
            // Transformar productos y ajustar la URL de la imagen si existe
            $productos->transform(function ($producto) {
                $producto->imagen_url = $producto->imagen ? Storage::url('public/product/' . $producto->imagen) : null;
                return $producto;
            });
    
            // Verificar si se encontraron productos
            if ($productos->isEmpty()) {
                return response()->json(['message' => 'No se encontraron productos'], 404);
            } else {
                return response()->json($productos);
            }
        }
    }
    
    
}
