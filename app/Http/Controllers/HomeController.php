<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Cliente;

class HomeController extends Controller
{
   
    public function index()
    {
        $productos = Producto::count();
        $clientes = Cliente::count();
        return view('panel.index', compact('productos', 'clientes'));
    }
}
