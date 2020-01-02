<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HardwareRequest extends FormRequest
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
            'hardware_name' => 'required',
            'sub_category_id' => 'required',
            'category_id' => 'required',
            'quantity' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'hardware_name.required' => 'Hardware name is required',
            'sub_category_id.required' => 'Sub Category is required',
            'category_id.required' => 'Category is required',
            'quantity.required' => 'Quantity description is required',
        ];
    }
}
