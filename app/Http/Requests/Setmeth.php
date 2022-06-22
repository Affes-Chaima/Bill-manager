<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Setmeth extends FormRequest
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
            ['IDMODREG', 'required|numeric'],
            ['code_mod', 'required|max:16'],
            ['lib_mod', 'required|max:16']
        ];
    }
}
