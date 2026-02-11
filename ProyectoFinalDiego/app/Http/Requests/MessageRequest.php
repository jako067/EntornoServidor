<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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
            'name'    => ['required', 'string', 'max:30'],
            'subject' => ['required', 'string', 'max:100'],
            'text'    => ['required', 'string'],
            'readed'  => ['nullable', 'boolean'],
        ];
    }
    public function messages(): array
    {
        return [
            'name.required'    => 'El nombre es obligatorio.',
            'name.max'         => 'El nombre no puede tener más de 30 caracteres.',
            'subject.required' => 'El asunto es obligatorio.',
            'subject.max'      => 'El asunto no puede tener más de 100 caracteres.',
            'text.required'    => 'El texto del mensaje es obligatorio.',
        ];
    }
}
