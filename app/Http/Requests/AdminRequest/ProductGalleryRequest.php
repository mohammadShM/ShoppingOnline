<?php

namespace App\Http\Requests\AdminRequest;

use Illuminate\Foundation\Http\FormRequest;

class ProductGalleryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
           'file' => 'required|mimes::jpeg,jpg,png,svg|max:1024|min:10',
        ];
    }
}
