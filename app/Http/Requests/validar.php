<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validar extends FormRequest
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
            //
            'clave' => 'required',
            'nombre' => 'required',
            'app' => 'required',
            'ap' => 'required',
            'fn' => 'required',
            'email' => 'required',
            'pass' => 'required'
        ];
    }
}
