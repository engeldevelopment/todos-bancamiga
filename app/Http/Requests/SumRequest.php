<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SumRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "a" => "required|numeric|min:1",
            "b" => "required|numeric|min:1",
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            "a.min" => "No se permiten números negativos.",
            "b.min" => "No se permiten números negativos.",
            "a.required" => "Este campo es requerido.",
            "b.required" => "Este campo es requerido.",
        ];
    }
}
