<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {

        return [
            'nombre' => 'required|string|max:255',           
            'descripcion' => 'required|string',
            'precio_compra' => 'required|numeric|min:0',
            'costo_venta' => 'required|numeric|min:0',
            'stock' => 'required|integer',
            'fechaven' => 'nullable|date',
            'id_categoria' => 'required|integer|exists:categorias,id',            
            'estado' => 'required|boolean',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ];

    }

    public function messages()
    {
        return [
            'required' => 'El campo :attribute es obligatorio.',
            'string' => 'El campo :attribute debe ser una cadena de texto.',
            'max' => 'El campo :attribute no puede tener más de :max caracteres.',
            'numeric' => 'El campo :attribute debe ser un número.',
            'integer' => 'El campo :attribute debe ser un entero.',
            'date' => 'El campo :attribute debe ser una fecha válida.',
            'exists' => 'El campo :attribute seleccionado es inválido.',
            'boolean' => 'El campo :attribute debe ser verdadero o falso.',
            'image' => 'El campo :attribute debe ser una imagen.',
            'codigo.required' => 'El campo código es obligatorio.',
            'codigo.unique' => 'El código ingresado ya existe. Por favor, ingrese uno diferente.',
            'id_categoria.required' => 'Seleccione una categoria',
            'precio_compra.required' => 'Ingrese el precio de compra de su producto',
            'costo_venta.required' => 'Ingrese el costo de venta del producto',
            'stock.required' => 'Ingrese la cantidad de stock de su producto',
            'descripcion.required'=>'Ingrese La descripcion de su producto',
            'imagen.required' => 'Seleccione una imagen',
            'imagen.mimes' => 'El campo :attribute debe ser un archivo de tipo: jpeg, png, jpg, gif, svg, webp.',
            'imagen.max' => 'El campo :attribute no puede tener un tamaño mayor a 2048 KB.',            
        ];
    }
}
