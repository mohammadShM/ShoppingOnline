<?php

namespace App\Http\Requests\AdminRequest;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "name" => "required|string",
            "slug" => "required|string|unique:products,slug|alpha_dash",
            "price" => "required|integer|min:1000",
            "image" => "required|image|mimes:jpg,png,jpeg,mpeg|max:1024|min:10",
            "description" => "required|string|max:1500",
            "category_id" => "required|exists:categories,id",
            "brand_id" => "required|exists:brands,id",
        ];
    }
}
