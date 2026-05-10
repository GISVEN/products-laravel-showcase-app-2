<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest as Base;

class FormRequest extends Base
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'price' => ['required', 'numeric', 'min:0'],
            'category_id' => ['required', 'exists:categories'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
