<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
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
            'nombre' => 'required|string|max:255|unique:categorias',
            'descripcion' => 'required|string|max:255|unique:categorias',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'Se necesita un nombre',
            'nombre.string' => 'El nombre debe ser una cadena de texto',
            'nombre.max' => 'El nombre no puede exceder los 255 caracteres',
            'nombre.unique' => 'El nombre ya está en uso',
            'descripcion.required' => 'Se necesita una descripción',
            'descripcion.string' => 'La descripción debe ser una cadena de texto',
            'descripcion.max' => 'La descripción no puede exceder los 255 caracteres',
            'descripcion.unique' => 'La descripción ya está en uso',
        ];
    }
}
