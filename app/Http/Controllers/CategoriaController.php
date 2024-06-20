<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriaRequest;
use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        // Consulta las categorías ordenadas por lo más reciente
        $categoriasQuery = Categoria::orderBy('created_at', 'desc');

        // Aplica el filtro de búsqueda si hay término de búsqueda
        if (!empty($search)) {
            $categoriasQuery->where('nombre', 'like', '%' . $search . '%');
        }

        // Obtiene las categorías paginadas
        $categorias = $categoriasQuery->paginate(5);

        // Retorna la vista con las categorías paginadas y el término de búsqueda
        return view('categoria.index', compact('categorias', 'search'));
    }

    public function create()
    {
        return view('categoria.create');
    }


    public function store(CategoriaRequest $request)
    {
        $categoria = Categoria::create($request->all());
        return redirect()->route('categoria.index')->with('success', 'Categoría creada exitosamente.');
    }

    public function edit($id)
    {
        $categoria = Categoria::find($id);
        return view('categoria.edit', compact('categoria'));
    }

    public function update(CategoriaRequest $request, $id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->update($request->all());
        return redirect()->route('categoria.index')->with('success', 'Categoría actualizada exitosamente.');
    }

    public function destroy($id)
    {
        // Encuentra la categoría por su ID
        $categoria = Categoria::findOrFail($id);

        // Verifica si la categoría tiene productos asociados
        if ($categoria->productos()->count() > 0) {
            // Redirige de vuelta con un mensaje de error
            return redirect()->route('categoria.index')->with('error', 'No se puede eliminar la categoría porque tiene productos asociados.');
        }

        // Si no tiene productos asociados, elimina la categoría
        $categoria->delete();

        // Redirige de vuelta con un mensaje de éxito
        return redirect()->route('categoria.index')->with('success', 'Categoría eliminada exitosamente.');
    }
}
