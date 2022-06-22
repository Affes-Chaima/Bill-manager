<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Bill extends FormRequest
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
        ['IDFACT','required|numeric'],
        ['IDCLT','required|numeric'],
        ['IDSOC','required|numeric'],
        ['code_fact','string', 'required|max:16'],
        ['date_fact',date('D/M/Y'), 'required'],
        ['totalht_fact','required|numeric'],
        ['totaltva_fact','required|numeric'],
        ['totalttc_fact', 'required|numeric'],
        ['totremise_fact','required|numeric'],
        ['solde_fact', 'required|numeric']
        ];
    }
}
