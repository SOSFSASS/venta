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
        // Guardamos los datos del cliente
        Cliente::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'tipo_identificacion' => $request->tipo_identificacion,
            'documento' => $request->documento,
            'correo' => $request->correo,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
            'estado' => 1,
        ]);

        // Redireccionamos a la lista de clientes con un mensaje de éxito
        return redirect()->route('cliente.index')->with('success', 'Cliente creado correctamente.');
    }
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('cliente.edit', compact('cliente'));
    }

    public function update(ClienteRequest $request, $id)
    {
        // Actualiza el cliente en la base de datos
        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());

        // Redirecciona a la ruta deseada con un mensaje de éxito
        return redirect()->route('cliente.index')
            ->with('success', 'Cliente actualizado correctamente.');
    }

    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
    
        // Cambiar el estado del cliente a inactivo (por ejemplo, cambiar a 0 para eliminar)
        $cliente->estado = 0;
        $cliente->save();
    
        return redirect()->route('cliente.index')->with('success', 'Cliente inactivado correctamente.');
    }
}
