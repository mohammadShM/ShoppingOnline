<?php /** @noinspection ReturnTypeCanBeDeclaredInspection */

/** @noinspection PhpMissingReturnTypeInspection */

namespace App\Http\Requests\AdminRequest;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property mixed $id
 * @property mixed $brand
 */
class BrandUpdateRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        // for Check all names unique except the name of this line
        $brand = $this->brand;
        return [
            "name" => "required|string|unique:brands,name," . $brand->id ,
            "image" => "nullable|mimes:jpg,png,jpeg,mpeg|max:8200|image",
        ];
    }
}
