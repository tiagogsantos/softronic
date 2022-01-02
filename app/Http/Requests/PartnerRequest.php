<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartnerRequest extends FormRequest
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
            'company' => 'required',
            'cnpj' => 'required',
            'contact' => 'required',
            'street' => 'required',
            'number' => 'required',
            'neighborhood' => 'required',
            'zip_code' => 'required',
            'city' => 'required',
            'uf' => 'required',
            'phone' => 'required',
            'ramal' => 'required',
            'email' => 'required',
        ];
    }
}
