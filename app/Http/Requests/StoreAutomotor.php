<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreAutomotor extends FormRequest
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
    public function rules(): array
    {
        return [
            'marca' => 'required|string|max:100|min:2',
            'modelo' => 'required|string|max:100|min:2',
            'patente' => 'required|max:15|min:6',
            'tipo' => [
                'required|max:255',
                Rule::in(['standar','suv','camioneta','camion']),
            ],
        ];
    }
}
