<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Http\Requests\ClienteRequest;


class ClienteController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        
        // Consulta los clientes ordenados por lo más reciente
        $clientesQuery = Cliente::orderBy('created_at', 'desc');

        // Aplica el filtro de búsqueda si hay término de búsqueda
        if (!empty($search)) {
            $clientesQuery->where('nombre', 'like', '%' . $search . '%')
                          ->orWhere('apellido', 'like', '%' . $search . '%')
                          ->orWhere('documento', 'like', '%' . $search . '%')
                          ->orWhere('correo', 'like', '%' . $search . '%');
        }

        // Obtiene los clientes paginados
        $clientes = $clientesQuery->paginate(10); // Puedes ajustar el número de resultados por página según tus necesidades

        // Retorna la vista con los clientes paginados y el término de búsqueda
        return view('cliente.index', compact('clientes', 'search'));
    }

    public function create()
    {
        // Retorna la vista para crear un nuevo cliente
        return view('cliente.create');
    }

    public function store(ClienteRequest $request)
    {
        // Crea un nuevo cliente en la base de datos
        Cliente::create($request->validated());

        // Redirecciona a la ruta deseada con un mensaje de éxito
        return redirect()->route('cliente.index')
                         ->with('success', 'Cliente creado correctamente.');
    }
    public function edit(Cliente $cliente)
    {
         // Retorna la vista para editar un cliente existente
         return view('cliente.edit', compact('cliente'));
    }

    public function update(ClienteRequest $request, Cliente $cliente)
    {
        // Actualiza el cliente en la base de datos
        $cliente->update($request->validated());

        // Redirecciona a la ruta deseada con un mensaje de éxito
        return redirect()->route('cliente.index')
                         ->with('success', 'Cliente actualizado correctamente.');
    }

    public function destroy(Cliente $cliente)
    {
        // Elimina el cliente de la base de datos
        $cliente->delete();

        // Redirecciona a la ruta deseada con un mensaje de éxito
        return redirect()->route('cliente.index')
                         ->with('success', 'Cliente eliminado correctamente.');
    }

}
