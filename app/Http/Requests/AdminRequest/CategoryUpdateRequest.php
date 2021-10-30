<?php /** @noinspection PhpMissingReturnTypeInspection */

/** @noinspection ReturnTypeCanBeDeclaredInspection */

namespace App\Http\Requests\AdminRequest;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property mixed $ctegory
 */
class CategoryUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        // for Check all names unique except the name of this line
        $category = $this->category;
        return [
            "parent_id" => 'nullable',
            "title_fa" => 'required|string|min:2|max:100|unique:categories,title_fa,'.$category->id,
            "title_en" => 'nullable|string|min:2|max:100|unique:categories,title_en,'.$category->id,
        ];
    }
}
