<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:5|max:150',
            'unit' => 'required|integer',
            'unit_price' => 'required|integer',
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'Ürün İsmi',
            'Unit' => 'Birimi',
            'unit_price' => 'Birim Fiyatı',
        ];
    }
}
