<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Http\Requests\ProductoRequest;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Support\Facades\Storage;


class ProductoController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        // Consulta los productos ordenados por lo más reciente
        $productosQuery = Producto::orderBy('created_at', 'desc');

        // Aplica el filtro de búsqueda si hay término de búsqueda
        if (!empty($search)) {
            $productosQuery->where('nombre', 'like', '%' . $search . '%');
        }

        // Obtiene los productos paginados
        $productos = $productosQuery->paginate(5);

        // Retorna la vista con los productos paginados y el término de búsqueda
        return view('producto.index', compact('productos', 'search'));
    }

    public function create()
    {
        // Cargar las categorías, monedas y medidas para los selects
        $categorias = Categoria::all();

        return view('producto.create', compact('categorias'));
    }

    public function generarCodigoUnico()
    {
        // Definir el prefijo del código
        $prefijo = "PR";

        // Obtener el último código insertado en la base de datos
        $ultimoProducto = Producto::orderBy('codigo', 'desc')->first();

        // Extraer el número secuencial del último código
        if ($ultimoProducto) {
            $ultimoCodigo = $ultimoProducto->codigo;
            $ultimoNumero = (int) substr($ultimoCodigo, strlen($prefijo));
        } else {
            // Si no hay ningún código en la base de datos, empezar desde 0
            $ultimoNumero = 0;
        }

        // Incrementar el número para el nuevo código
        $nuevoNumero = $ultimoNumero + 1;

        // Formatear el nuevo número con ceros a la izquierda para que tenga 7 dígitos
        $nuevoNumeroFormateado = str_pad($nuevoNumero, 7, '0', STR_PAD_LEFT);

        // Combinar el prefijo y el número generado para formar el código completo
        $codigo = $prefijo . $nuevoNumeroFormateado;

        // Verificar si el código ya existe en la base de datos
        $productoExistente = Producto::where('codigo', $codigo)->exists();

        // Si el código existe en la base de datos, generar uno nuevo
        while ($productoExistente) {
            $nuevoNumero++;
            $nuevoNumeroFormateado = str_pad($nuevoNumero, 7, '0', STR_PAD_LEFT);
            $codigo = $prefijo . $nuevoNumeroFormateado;
            $productoExistente = Producto::where('codigo', $codigo)->exists();
        }
        return response()->json(['codigo' => $codigo]);

        // Devolver el código generado
        //echo $codigo;
    }

    public function store(ProductoRequest  $request)
    {

        // $rules = [
        //     'nombre' => 'required|string|max:255',
        //     'codigo' => 'required|string|max:50',
        //     'descripcion' => 'required|string',
        //     'precio_compra' => 'required|numeric',
        //     'costo_venta' => 'required|numeric',
        //     'stock' => 'required|integer',
        //     'fechaven' => 'nullable|date',
        //     'id_categoria' => 'required|integer|exists:categorias,id',
        //     'id_moneda' => 'required|integer|exists:monedas,id',
        //     'id_medida' => 'required|integer|exists:medidas,id',
        //     'estado' => 'required|boolean',
        //     'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        // ];

        // Validar los datos de entrada utilizando ProductoRequest
        $validatedData = $request->validated();

        // Convertir la fecha al formato adecuado (año-mes-día)
        if (isset($validatedData['fechaven'])) {
            $validatedData['fechaven'] = Carbon::createFromFormat('d-m-Y', $validatedData['fechaven'])->format('Y-m-d');
        }

        // Generar código único
        //$validatedData['codigo'] = $this->generarCodigoUnico();
        // save product code value
        // $validatedData['product_code'] = $product_code;
        // Verificar si el usuario ha optado por ingresar manualmente el código
        // if ($request->has('codigoManual')) {
        //     $validatedData['codigo'] = $request->input('codigo');
        // } else {
        //     // Si no, utilizar el código generado automáticamente
        //     $validatedData['codigo'] = $validatedData['codigo'];
        //     // Si la generación automática está activada, generar el código automáticamente
        //     //$validatedData['codigo'] = $this->generarCodigoUnico();
        // }

        // Verificar si el usuario ha ingresado manualmente el código
        // if ($request->has('codigo')) {
        //     // Asignar el valor del campo 'codigo' al array $validatedData
        //     $validatedData['codigo'] = $request->input('codigo');
        // } else {
        //     // Si no, generar un código único automáticamente
        //     $validatedData['codigo'] = uniqid(); // O cualquier otra lógica para generar un código único
        // }

        // Verificar si el usuario ha ingresado manualmente el código
        if ($request->has('codigo')) {
            // Obtener el código ingresado por el usuario
            $codigoManual = $request->input('codigo');

            // Verificar si el código ingresado ya existe en la base de datos
            if (Producto::where('codigo', $codigoManual)->exists()) {
                // Si el código ya existe, mostrar un mensaje de error en la vista
                return back()->withErrors(['codigo' => 'El código ingresado ya existe. Por favor, ingrese uno diferente.']);
            }

            // Asignar el código manual al array de datos validados
            $validatedData['codigo'] = $codigoManual;
        } else {
            // Si no se ingresó un código manualmente, generar un código único automáticamente
            do {
                $codigoAutomatico = uniqid();
            } while (Producto::where('codigo', $codigoAutomatico)->exists());

            // Asignar el código único generado al array de datos validados
            $validatedData['codigo'] = $codigoAutomatico;
        }

        /**
         * Handle upload image with Storage.
         */
        if ($file = $request->file('imagen')) {
            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            $path = 'public/product/';

            $file->storeAs($path, $fileName);
            $validatedData['imagen'] = $fileName;
        }

        Producto::create($validatedData);

        return redirect()->route('producto.index')->with('success', 'Producto creado exitosamente.');
    }


    public function show(string $id)
    {
        $producto = Producto::findOrFail($id);
        return view('producto.detalleproducto', ['producto' => $producto]);
    }

    public function edit(string $id)
    {
        //
        // Obtener el producto que se va a editar
        $producto = Producto::findOrFail($id);

        // Obtener las categorías, monedas y medidas para los selectores en el formulario
        $categorias = Categoria::all();

        // Retornar la vista de edición con los datos del producto y las opciones de selección
        return view('producto.edit', compact('producto', 'categorias'));
    }

    public function update(ProductoRequest $request, string $id)
    {
        // Buscar el producto a actualizar
        $producto = Producto::findOrFail($id);

        // Convertir la fecha al formato adecuado (año-mes-día)
        if ($request->filled('fechaven')) {
            $fechaven = Carbon::createFromFormat('d-m-Y', $request->fechaven)->format('Y-m-d');
            $request->merge(['fechaven' => $fechaven]);
        }

        // Verificar si el código ha cambiado
        if ($request->codigo !== $producto->codigo) {
            // El código ha cambiado, actualiza el código en el producto
            $producto->codigo = $request->codigo;
        }

        // Verificar si se ha cargado una nueva imagen
        if ($request->hasFile('imagen') && $request->file('imagen')->isValid()) {
            // Eliminar la imagen anterior si existe
            if ($producto->imagen && Storage::exists('public/product/' . $producto->imagen)) {
                Storage::delete('public/product/' . $producto->imagen);
            }
            // Guardar la nueva imagen
            $fileName = hexdec(uniqid()) . '.' . $request->file('imagen')->getClientOriginalExtension();
            $path = 'public/product/';
            $request->file('imagen')->storeAs($path, $fileName);
            $producto->imagen = $fileName;
        }

        // Actualizar el producto con los nuevos valores del formulario
        $producto->update($request->except(['codigo', 'imagen']));

        // Redireccionar con un mensaje de éxito
        return redirect()->route('productos.index')->with('success', 'El producto se ha actualizado correctamente.');
    }



    public function generarEtiquetaProducto(Request $request)
    {

        
        $idProducto = $request->input('idProducto');
        $num_etiquetas = $request->input('num_etiquetas', 1); // Valor predeterminado de 1 si no se proporciona

        // Obtener el producto
        $producto = Producto::findOrFail($idProducto);

        // Devolver los datos de producto y número de etiquetas como respuesta
        return response()->json([
            'producto' => $producto,
            'num_etiquetas' => $num_etiquetas,
        ]);
    }

    public function destroy(string $id)
    {
        //
        $producto = Producto::findOrFail($id);

        // Cambiar el valor de un campo de 1 a 0
        $producto->estado= 0; // Reemplaza 'campo_a_actualizar' con el nombre real de tu campo
    
        // Guardar los cambios
        $producto->save();
    
        // Redireccionar con un mensaje de éxito
        return redirect()->route('producto.index')->with('success', 'El producto se ha eliminado correctamente.');
    }


}
