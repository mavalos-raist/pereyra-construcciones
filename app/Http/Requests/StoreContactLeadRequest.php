<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactLeadRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, array<int, string>>
     */
    public function rules(): array
    {
        return [
            'full_name' => ['required', 'string', 'max:120'],
            'phone' => ['required', 'string', 'max:40'],
            'email' => ['nullable', 'email', 'max:120'],
            'service' => ['required', 'string', 'max:120'],
            'budget_scope' => ['required', 'in:con-materiales,sin-materiales,a-definir'],
            'project_location' => ['nullable', 'string', 'max:120'],
            'preferred_contact' => ['required', 'in:whatsapp,llamada,email'],
            'message' => ['required', 'string', 'min:15', 'max:2000'],
        ];
    }

    /**
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'full_name' => 'nombre y apellido',
            'phone' => 'telefono',
            'email' => 'correo electronico',
            'service' => 'servicio',
            'budget_scope' => 'alcance del presupuesto',
            'project_location' => 'ubicacion del proyecto',
            'preferred_contact' => 'medio de contacto preferido',
            'message' => 'detalle del trabajo',
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'message.min' => 'Contanos un poco mas sobre el trabajo para poder orientarte mejor.',
            'budget_scope.in' => 'Selecciona si necesitas presupuesto con materiales, sin materiales o a definir.',
            'preferred_contact.in' => 'Elegi un medio de contacto valido.',
        ];
    }
}
