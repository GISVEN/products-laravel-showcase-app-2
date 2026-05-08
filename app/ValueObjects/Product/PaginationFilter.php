<?php

namespace App\ValueObjects\Product;

class PaginationFilter
{
    public function __construct(
        public readonly ?string $name,
        public readonly ?float $priceMin,
        public readonly ?float $priceMax,
        public readonly ?string $categoryId,
    ) {}
}
