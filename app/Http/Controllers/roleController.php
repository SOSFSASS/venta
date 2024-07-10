<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Requests\RoleRequest;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        // Consulta los roles ordenados por lo más reciente
        $rolesQuery = Role::orderBy('created_at', 'desc');

        // Aplica el filtro de búsqueda si hay término de búsqueda
        if (!empty($search)) {
            $rolesQuery->where('name', 'like', '%' . $search . '%');
        }

        // Obtiene los roles paginados
        $roles = $rolesQuery->paginate(5);

        // Retorna la vista con los roles paginados y el término de búsqueda
        return view('role.index', compact('roles', 'search'));
    }

    public function create()
    {
        $permissions = Permission::all();
        return view('role.create', compact('permissions'));
    }

    public function store(RoleRequest $request)
    {
        $role = Role::create($request->only('name'));
        $permissions = Permission::whereIn('id', $request->input('permissions', []))->pluck('name');
        $role->syncPermissions($permissions);
        return redirect()->route('roles.index')->with('success', 'Rol creado exitosamente.');
    }

    public function edit($id)
    {
        $role = Role::find($id);
        $permissions = Permission::all();
        $rolePermissions = $role->permissions->pluck('id')->toArray();
    
        return view('role.edit', compact('role', 'permissions', 'rolePermissions'));
    }

    public function update(RoleRequest $request, $id)
    {
        $role = Role::findOrFail($id);
        $role->update($request->only('name'));
        $permissions = Permission::whereIn('id', $request->input('permissions', []))->pluck('name');
        $role->syncPermissions($permissions);
        return redirect()->route('roles.index')->with('success', 'Rol actualizado exitosamente.');
    }

    public function destroy($id)
    {
        // Encuentra el rol por su ID
        $role = Role::findOrFail($id);

        // Verifica si el rol tiene usuarios asociados (esto depende de tu implementación)
        if ($role->users()->count() > 0) {
            // Redirige de vuelta con un mensaje de error
            return redirect()->route('roles.index')->with('error', 'No se puede eliminar el rol porque tiene usuarios asociados.');
        }

        // Si no tiene usuarios asociados, elimina el rol
        $role->delete();

        // Redirige de vuelta con un mensaje de éxito
        return redirect()->route('roles.index')->with('success', 'Rol eliminado exitosamente.');
    }
}
