<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        $idProduct = last(request()->segments());
        if ($idProduct == 'product') {
            $unique = 'unique:products';
            $resources = 'required|array';
        } else {
            $unique = "unique:products,slug,{$idProduct}";
            $resources = 'nullable';
        }
        return [
            'resources' => $resources,
            '*.*.name' => 'required',
            '*.*.status' => 'required',
            '*.*.featured' => 'required',
            '*.*.reference' => 'required',
            '*.*.description' => 'required',
            '*.*.softronic_id' => 'required',
            '*.*.company_id' => 'required',
            '*.*.slug' => "required|${unique}",
            '*.*.meta_title' => 'required',
            '*.*.meta_description' => 'required',
        ];
    }
}
