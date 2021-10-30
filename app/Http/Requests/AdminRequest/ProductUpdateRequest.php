<?php

namespace App\Http\Requests\AdminRequest;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property mixed $product
 */
class ProductUpdateRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        // for Check all names unique except the name of this line
        $product = $this->product;
        return [
            "name" => "required|string",
            "slug" => "required|string|alpha_dash|unique:products,slug," . $product->id,
            "price" => "required|integer|min:1000",
            "image" => "nullable|image|mimes:jpg,png,jpeg,mpeg|max:1024|min:10",
            "description" => "required|string|max:1500",
            "category_id" => "required|exists:categories,id",
            "brand_id" => "required|exists:brands,id",
        ];
    }
}
