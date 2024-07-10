<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('roles')->get();
        return view('user.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('user.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'required|exists:roles,name',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ], [
            'name.required' => 'El nombre es obligatorio.',
            'name.string' => 'El nombre debe ser una cadena de texto.',
            'name.max' => 'El nombre no debe exceder los 255 caracteres.',
            'apellido.required' => 'El apellido es obligatorio.',
            'apellido.string' => 'El apellido debe ser una cadena de texto.',
            'apellido.max' => 'El apellido no debe exceder los 255 caracteres.',
            'telefono.required' => 'El teléfono es obligatorio.',
            'telefono.string' => 'El teléfono debe ser una cadena de texto.',
            'telefono.max' => 'El teléfono no debe exceder los 20 caracteres.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.string' => 'El correo electrónico debe ser una cadena de texto.',
            'email.email' => 'El correo electrónico debe ser una dirección de correo válida.',
            'email.max' => 'El correo electrónico no debe exceder los 255 caracteres.',
            'email.unique' => 'El correo electrónico ya está registrado.',
            'password.required' => 'La contraseña es obligatoria.',
            'password.string' => 'La contraseña debe ser una cadena de texto.',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
            'role.required' => 'El rol es obligatorio.',
            'role.exists' => 'El rol seleccionado no es válido.',
            'imagen.image' => 'La imagen debe ser un archivo de imagen.',
            'imagen.mimes' => 'La imagen debe ser un archivo de tipo: jpeg, png, jpg, gif, svg, webp.',
            'imagen.max' => 'La imagen no debe exceder los 2048 kilobytes.',
        ]);

        $userData = $request->only('name', 'apellido', 'telefono', 'email');
        $userData['password'] = Hash::make($request->password);

        if ($file = $request->file('imagen')) {
            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            $path = 'public/user/';
            $file->storeAs($path, $fileName);
            $userData['imagen'] = $fileName;
        }

        $user = User::create($userData);
        $user->assignRole($request->role);

        return redirect()->route('user.index')->with('success', 'Usuario creado con éxito');
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        return view('user.edit', compact('user', 'roles'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'role' => 'required|exists:roles,name',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ], [
            'name.required' => 'El nombre es obligatorio.',
            'name.string' => 'El nombre debe ser una cadena de texto.',
            'name.max' => 'El nombre no debe exceder los 255 caracteres.',
            'apellido.required' => 'El apellido es obligatorio.',
            'apellido.string' => 'El apellido debe ser una cadena de texto.',
            'apellido.max' => 'El apellido no debe exceder los 255 caracteres.',
            'telefono.required' => 'El teléfono es obligatorio.',
            'telefono.string' => 'El teléfono debe ser una cadena de texto.',
            'telefono.max' => 'El teléfono no debe exceder los 20 caracteres.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.string' => 'El correo electrónico debe ser una cadena de texto.',
            'email.email' => 'El correo electrónico debe ser una dirección de correo válida.',
            'email.max' => 'El correo electrónico no debe exceder los 255 caracteres.',
            'email.unique' => 'El correo electrónico ya está registrado.',
            'role.required' => 'El rol es obligatorio.',
            'role.exists' => 'El rol seleccionado no es válido.',
            'imagen.image' => 'La imagen debe ser un archivo de imagen.',
            'imagen.mimes' => 'La imagen debe ser un archivo de tipo: jpeg, png, jpg, gif, svg, webp.',
            'imagen.max' => 'La imagen no debe exceder los 2048 kilobytes.',
        ]);

        $userData = $request->only('name', 'apellido', 'telefono', 'email');

        if ($request->hasFile('imagen') && $request->file('imagen')->isValid()) {
            if ($user->imagen && Storage::exists('public/user/' . $user->imagen)) {
                Storage::delete('public/user/' . $user->imagen);
            }
            $fileName = hexdec(uniqid()) . '.' . $request->file('imagen')->getClientOriginalExtension();
            $path = 'public/user/';
            $request->file('imagen')->storeAs($path, $fileName);
            $userData['imagen'] = $fileName;
        }

        $user->update($userData);
        $user->syncRoles($request->role);

        return redirect()->route('user.index')->with('success', 'Usuario actualizado con éxito');
    }

    // public function destroy(User $user)
    // {
    //     if ($user->imagen && Storage::exists('public/user/' . $user->imagen)) {
    //         Storage::delete('public/user/' . $user->imagen);
    //     }
    //     $user->delete();
    //     return redirect()->route('user.index')->with('success', 'Usuario eliminado con éxito');
    // }
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
    
        // Eliminar todos los roles del usuario
        $roles = $user->getRoleNames(); // Obtiene todos los roles del usuario
        foreach ($roles as $role) {
            $user->removeRole($role);
        }
    
        // Eliminar la imagen del usuario
        if ($user->imagen && Storage::exists('public/user/' . $user->imagen)) {
            Storage::delete('public/user/' . $user->imagen);
        }
    
        // Eliminar el usuario
        $user->delete();
    
        return redirect()->route('user.index')->with('success', 'Usuario eliminado con éxito');
    }
    
}
