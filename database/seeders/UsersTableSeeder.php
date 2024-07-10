<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear roles
        $adminRole = Role::firstOrCreate(['name' => 'administrador']);
        $vendedorRole = Role::firstOrCreate(['name' => 'vendedor']);

        // Crear usuarios
        $admin = User::firstOrCreate([
            'name' => 'Administrador',
            'apellido' => 'castañeda',
            'telefono' => '921674886',
            'email' => 'sayes@dev.com',
            'password' => Hash::make('12345678'), // Cambia 'password' por la contraseña que desees
        ]);
        $admin->assignRole($adminRole);

        $vendedor = User::firstOrCreate([
            'name' => 'Vendedor',
            'apellido' => 'Lopez',
            'telefono' => '921674886',
            'email' => 'sayes@gmail.com',
            'password' => Hash::make('12345678'), // Cambia 'password' por la contraseña que desees
        ]);
        $vendedor->assignRole($vendedorRole);
    }
}
