<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        $idCategory = last(request()->segments());
        if ($idCategory == 'category') {
            $unique = 'unique:categories';
            $resources = 'required|array';
        } else {
            $unique = "unique:categories,slug,{$idCategory}";
            $resources = 'nullable';
        }
        return [
            "resources" => $resources,
            'resources.*.name' => 'required|string',
            'resources.*.status' => 'required|integer',
            'resources.*.description' => 'required|string',
            'resources.*.slug' => "required|string|{$unique}",
            'resources.*.meta_title' => 'required|string',
            'resources.*.meta_description' => 'required|string',
            'resources.*.softronic_id' => 'required|integer',
            'resources.*.category_id' => 'nullable|integer',
        ];
    }
}
