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
            'category_id' => 'required|integer|exists:categories,id',
            'brand_id' => 'required|integer|exists:brands,id',
            'name' => 'required|string|unique:clothing',
            'preview_image' => 'required',
            'color_ids' => 'nullable|array',
//            'color_id' => 'required|string|exists:colors,id',
            'size_ids' => 'nullable|array',
//            'size_id' => 'required|exists:sizes,id',
            'quantity' => 'required|integer',
            'status_id' => 'required',
            'price' => 'required|integer',
            'discount' => '',
        ];
    }
}
