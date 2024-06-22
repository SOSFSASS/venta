<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
     // Nombre de la tabla
     protected $table = 'productos';

     // Campos que se pueden asignar masivamente
     protected $fillable = [
         'codigo',
         'nombre',
         'descripcion',
         'imagen',
         'precio_compra',
         'costo_venta',
         'stock',
         'fechaven',
         'id_categoria',
         'estado'
     ];
 
     // Relaciones
     public function categoria()
     {
         return $this->belongsTo(Categoria::class, 'id_categoria', 'id');
     }

    // Definir la relación inversa
    // public function categoria()
    // {
    //     return $this->belongsTo(Categoria::class);
    // }
}
