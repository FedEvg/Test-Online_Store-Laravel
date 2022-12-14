<?php

namespace App\Http\Requests\Clothing;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the client is authorized to make this request.
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'category_id' => 'required|integer|exists:categories,id',
            'brand_id' => 'required|integer|exists:brands,id',
            'name' => 'required|string|unique:clothing,name,'.$this->clothing->id,
            'preview_image' => '',
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
