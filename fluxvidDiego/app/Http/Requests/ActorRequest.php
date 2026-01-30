<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActorRequest extends FormRequest
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
            'name'=>'required|min:2|alpha',
            'nationality'=>'required|min:2|max:30',
            'born'=>'required|numeric|between:1950,2025',
        ];
    }

    /*    public function messages()
    {
        return [
            'name.required'=>'Este campo es obligatorio',
            'nationality.required'=>'Este campo es obligatorio',
            'born.required'=>'Este campo es obligatorio',
            'name.min'=>'Tu nombre tiene que tener 2 letras mínimo',
            'nationality.max'=>'Tu nacionalidad tiene que tener 30 letras maximo',
            'born.between'=>'Tu nacimiento tiene que estar entre 1950 y 2025',
        ];
    }
*/

    }
