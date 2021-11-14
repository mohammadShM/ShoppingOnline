<?php /** @noinspection PhpMissingReturnTypeInspection */

/** @noinspection ReturnTypeCanBeDeclaredInspection */

namespace App\Http\Requests\AdminRequest;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @property mixed $category
 */
class CategoryUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    #[ArrayShape(["parent_id" => "string", "title_fa" => "string", "title_en" => "string", 'propertyGroups' => "string"])]
    public function rules()
    {
        // for Check all names unique except the name of this line
        $category = $this->category;
        return [
            "parent_id" => 'nullable',
            "title_fa" => 'required|string|min:2|max:100|unique:categories,title_fa,' . $category->id,
            "title_en" => 'nullable|string|min:2|max:100|unique:categories,title_en,' . $category->id,
            'propertyGroups' => 'nullable|array|exists:property_groups,id',
        ];
    }
}
