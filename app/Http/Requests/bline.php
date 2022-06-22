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
        ['IDART','required|numeric'],
        ['qte_art', 'required|numeric'],
        ['puht_art', 'required|numeric'],
        ['remise_art','required|numeric'],
        ['punetht_art', 'required|numeric'],
        ['totalnetht_art', 'required|numeric'],
        ['totalht_art', 'required|numeric'],
        ['totalttc_art', 'required|numeric']];
    }
}
