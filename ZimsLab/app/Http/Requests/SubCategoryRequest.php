<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubCategoryRequest extends FormRequest
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
            'sub_category_name' => 'required',
            'category_id' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'sub_category_name.required' => 'Sub Category name is required',
            'category_id.required' => 'Category is required',
        ];
    }
}
