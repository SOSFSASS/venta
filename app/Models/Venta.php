<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente',
        'user_id',
        'documento',
        'correo',
        'subtotal',
        'igv',
        'total',
        'comentario',
        'metodo_pago',
        'estado'
    ];

    public function detalles()
    {
        return $this->hasMany(DetalleVenta::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}