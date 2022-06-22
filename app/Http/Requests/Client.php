<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use PharIo\Manifest\Email;

class Client extends FormRequest
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
            
            ['IDCLT' , 'required|numeric'],
            ['code_clt', 'required|numeric'],
            ['nom_clt','string', 'required|max:10'],
            ['prenom_clt','string','required|max:10'],
            ['rais_soc_clt','string', 'required|max:20'],
            ['numtel1_clt' , 'required|numeric'],
            ['numtel2_clt' , 'required|numeric'],
            ['email_clt' ,'string', 'required|max:25'],
            ['adr_clt','string', 'required|max:50'],
            ['mf_clt','string', 'required|max:8'],
            ['rc_clt' ,'string', 'required|max:11']
        ];
    }
}
