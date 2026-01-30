<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubjectRequest extends FormRequest
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
            'name' => 'required|min:3|max:50',
            'code' => 'required|size:5',
            'cycle' => 'min:5|max:50',
            'year' => 'required|digits_between:2025,2030',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio',
            'name.min' => 'El ha de tener minimo 3 letras',
            'name.max' => 'El ha de tener maximo 50 letras',

            'code.required' => 'El codigo es obligatorio',
            'code.size' => 'El codigo ha de tener un tamaño de 5 digitos/letras',

            'cyle.min' => 'El ciclo ha de tener mínimo 5 letras',
            'cycle.max' => 'El ciclo ha de tener máximo 50 letras',

            'year.required' => 'El año es obligatorio',
            'year.digits_betweem' => 'Los años deben estar entre 2025 y 2030',

        ];
    }
}
