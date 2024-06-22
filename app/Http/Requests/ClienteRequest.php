<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ClienteRequest extends FormRequest
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
            'nombre' => 'required|string|max:50',
            'apellido' => 'required|string|max:50',
            'tipo_identificacion' => 'required|in:RUC,DNI',
            'documento' => [
                'required',
                function ($attribute, $value, $fail) {
                    $tipo_identificacion = $this->input('tipo_identificacion');
                    if ($tipo_identificacion === 'RUC' && !preg_match('/^[0-9]{11}$/', $value)) {
                        return $fail('El RUC debe tener 11 dígitos.');
                    } elseif ($tipo_identificacion === 'DNI' && !preg_match('/^[0-9]{8}$/', $value)) {
                        return $fail('El DNI debe tener 8 dígitos.');
                    }
                },
            ],
            'correo' => 'nullable|email|max:100',
            'telefono' => 'nullable|string|max:15',
            'direccion' => 'nullable|string|max:200',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.string' => 'El nombre debe ser una cadena de texto.',
            'nombre.max' => 'El nombre no puede tener más de 50 caracteres.',
            'apellido.required' => 'El apellido es obligatorio.',
            'apellido.string' => 'El apellido debe ser una cadena de texto.',
            'apellido.max' => 'El apellido no puede tener más de 50 caracteres.',
            'tipo_identificacion.required' => 'El tipo de identificación es obligatorio.',
            'tipo_identificacion.in' => 'El tipo de identificación debe ser RUC o DNI.',
            'documento.required' => 'El documento es obligatorio.',
            'correo.email' => 'El correo debe ser una dirección de correo válida.',
            'correo.max' => 'El correo no puede tener más de 100 caracteres.',
            'telefono.string' => 'El teléfono debe ser una cadena de texto.',
            'telefono.max' => 'El teléfono no puede tener más de 15 caracteres.',
            'direccion.string' => 'La dirección debe ser una cadena de texto.',
            'direccion.max' => 'La dirección no puede tener más de 200 caracteres.',
        ];
    }
}
