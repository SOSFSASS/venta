<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Cliente;
use App\Models\Venta;
use App\Models\DetalleVenta;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $productos = Producto::count();
        $clientes = Cliente::count();
    
        // Calcular las ganancias mensuales
        $startOfMonth = now()->startOfMonth();
        $endOfMonth = now()->endOfMonth();
        $monthlyEarnings = Venta::whereBetween('created_at', [$startOfMonth, $endOfMonth])->sum('total');
    
        // Obtener los mejores vendedores y transacciones recientes
        $bestSellers = $this->getBestSellers();
        $recentTransactions = Venta::with('detalles.producto')->latest()->take(10)->get();
    
        // Datos de ventas para gráficos
        $salesData = $this->getSalesData();
    
        return view('panel.index', compact('productos', 'clientes', 'monthlyEarnings', 'bestSellers', 'recentTransactions', 'salesData'));
    }

    private function getBestSellers()
    {
        return DetalleVenta::with('producto')
            ->selectRaw('producto_id, SUM(cantidad) as cantidad')
            ->groupBy('producto_id')
            ->orderByDesc('cantidad')
            ->take(5)
            ->get()
            ->map(function ($detalleVenta) {
                return [
                    'producto' => $detalleVenta->producto->nombre,
                    'cantidad' => $detalleVenta->cantidad,
                ];
            });
    }

    private function getSalesData()
    {
        $ventas = Venta::selectRaw('DATE_FORMAT(created_at, "%Y-%m") as month, SUM(total) as total')
            ->groupBy('month')
            ->orderBy('month', 'asc')
            ->get();

        return [
            'months' => $ventas->pluck('month'),
            'totals' => $ventas->pluck('total'),
        ];
    }
}