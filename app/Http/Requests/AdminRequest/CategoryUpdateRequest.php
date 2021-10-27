<?php /** @noinspection PhpMissingReturnTypeInspection */

/** @noinspection ReturnTypeCanBeDeclaredInspection */

namespace App\Http\Requests\AdminRequest;

use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "parent_id" => 'nullable',
            "title_fa" => 'required|unique:categories,title_fa|string|min:2|max:100',
            "title_en" => 'nullable|unique:categories,title_en|string|min:2|max:100',
        ];
    }
}
