<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // permitimos a todos enviar la request
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:2', 'max:30'],
            'description' => ['required', 'string'],
            'location' => ['required', 'string'],
            'map' => ['nullable', 'string'],
            'date' => ['nullable', 'date'],
            'hour' => ['required', 'date_format:H:i'],
            'type' => ['required', 'in:official,exhibition,charity'],
            'tags' => ['nullable', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El nombre del evento es obligatorio.',
            'name.min' => 'El nombre del evento debe tener al menos 2 caracteres.',
            'name.max' => 'El nombre del evento no puede superar los 30 caracteres.',

            'description.required' => 'La descripción del evento es obligatoria.',

            'location.required' => 'La ubicación es obligatoria.',

            'map.string' => 'El campo mapa debe ser un texto.',

            'date.date' => 'La fecha debe tener un formato válido.',

            'hour.required' => 'La hora del evento es obligatoria.',
            'hour.date_format' => 'La hora debe tener el formato HH:MM.',

            'type.required' => 'Debe seleccionar un tipo de evento.',
            'type.in' => 'El tipo debe ser oficial, exhibition o charity.',

            'tags.string' => 'Las etiquetas deben ser texto.',

        ];
    }
}
