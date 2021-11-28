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
        return [
            'name' => 'required|max:255|string',
            'price' => 'required|numeric',
            'product_category_id' => 'required',
            'description' => 'required|string',
            'image' => 'nullable|mimes:jpg,jpeg,gif,png|max:2048',
            'is_promo' => 'nullable|boolean',
            'is_best_seller' => 'nullable|boolean',
        ];
    }
}
