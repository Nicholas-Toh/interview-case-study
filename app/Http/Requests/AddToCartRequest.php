<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddToCartRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'product_id' => 'required_unless:variation_id,null|integer|exists:products',
            'variation_id' => 'required_unless:product_id,null|integer|exists:product_variations',
            'quantity' => 'required|integer|gt:0',
        ];
    }
}
