<?php

namespace App\Http\Requests\Clothing;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'category_id' => 'required|string|exists:categories,id',
            'brand_id' => 'required|string|exists:brands,id',
            'name' => 'required|string',
            'color_ids' => 'nullable|array',
//            'color_id' => 'required|string|exists:colors,id',
            'size_ids' => 'nullable|array',
//            'size_id' => 'required|exists:sizes,id',
            'quantity' => 'required|integer',
            'availability_id' => 'required',
            'price' => 'required|integer',
            'discount' => '',
            'image' => 'nullable|array'
        ];
    }
}
