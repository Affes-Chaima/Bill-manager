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
            ['IDART', 'required|numeric'],
            ['IDTVA', 'required|numeric'],
            ['code_art', 'required|numeric'],
            ['lib_art','string','required|max:15'],
            ['puht_art', 'required|numeric'],
            ['puttc_art', 'required|numeric'],
            ['maxremise_art', 'required|numeric'],
            ['stockable_art', 'required'],
            ['actif_art','string', 'required|max:6'],
            ['depstsk_art', 'required|numeric'],
            ['codebarre_art', 'required'],
            ['prixcash_art', 'required|numeric']
        ];
    }
}
