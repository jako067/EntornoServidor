<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlayerRequest extends FormRequest
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

            'name'      => ['required', 'string', 'max:30'],
            'twitter'   => ['nullable', 'string'],
            'instagram' => ['nullable', 'string'],
            'twitch'    => ['nullable', 'string'],
            'visible'   => ['boolean'],


            'photo'     => ['required', 'image'],
            'position'  => ['required', 'string'],
            'rating'    => ['required', 'integer'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'    => 'El nombre es obligatorio.',
            'name.max'         => 'El nombre no puede tener más de 30 caracteres.',
            'photo.required'   => 'Debes subir una foto.',
            'photo.image'      => 'El archivo debe ser una imagen.',
            'position.required' => 'La posición es obligatoria.',
            'rating.required'  => 'El rating es obligatorio.',
            'rating.integer'   => 'El rating debe ser un número entero.',
        ];
    }
}
