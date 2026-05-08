<?php

namespace App\Http\Requests\Product;

use App\ValueObjects\Product\PaginationFilter;
use Illuminate\Foundation\Http\FormRequest;

class PaginatedRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['sometimes', 'string', 'min:0', 'max:255'],
            'price_min' => ['sometimes', 'float', 'min:0'],
            'price_max' => ['sometimes', 'float', 'min:0'],
            'category_id' => ['sometimes', 'uuid', 'exists:categories'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }

    public function getFilter(): PaginationFilter
    {
        return new PaginationFilter(
            name: $this->input('name'),
            priceMin: $this->input('price_min'),
            priceMax: $this->input('price_max'),
            categoryId: $this->input('category_id'),
        );
    }
}
