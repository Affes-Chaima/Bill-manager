<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Article extends FormRequest
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
            'IDREG', 'required|numeric',
            'IDMODREG', 'required|numeric',
            'code_reg','string', 'required|max:16',
            'date_reg',date('Y','M','D') ,'required|date',
            'montant_reg', 'required|numeric',
            'comment_reg', 'required|numeric'
        ];
    }
}
