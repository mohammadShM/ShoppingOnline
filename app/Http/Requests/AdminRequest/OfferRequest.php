<?php

namespace App\Http\Requests\AdminRequest;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     * @noinspection PhpArrayShapeAttributeCanBeAddedInspection
     */
    public function rules(): array
    {
        // for create =================================
        /** @noinspection NullPointerExceptionInspection */
        if (request()->routeIs('offer.store')) {
            return [
                'code' => 'required|unique:offers,code',
                'start_at' => 'required|jdate|before:end_at',
                'end_at' => 'required|jdate|after:start_at',
            ];
        }
        // for update =================================
        return [
            'code' => 'required',
            'start_at' => 'required|jdate|before:end_at',
            'end_at' => 'required|jdate|after:start_at',
        ];
    }
}
