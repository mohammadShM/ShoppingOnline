<?php /** @noinspection PhpMissingReturnTypeInspection */

/** @noinspection ReturnTypeCanBeDeclaredInspection */

namespace App\Http\Requests\AdminRequest;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class CategoryCreateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    #[ArrayShape(["parent_id" => "string", "title_fa" => "string", "title_en" => "string", 'propertyGroups' => "string"])]
    public function rules()
    {
        return [
            "parent_id" => 'nullable',
            "title_fa" => 'required|unique:categories,title_fa|string|min:2|max:100',
            "title_en" => 'nullable|unique:categories,title_en|string|min:2|max:100',
            'propertyGroups' => 'nullable|array|exists:property_groups,id',
        ];
    }
}
