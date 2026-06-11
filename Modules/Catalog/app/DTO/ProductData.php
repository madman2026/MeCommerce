<?php

namespace Modules\Catalog\DTO;

use Modules\Catalog\States\ProductState;
use Spatie\LaravelData\Data;

class ProductData extends Data
{
    public function __construct(
        public string $name,
        public string $slug,
        public string $sku,
        public int $price,
        public ?int $salePrice,
        public ?string $shortDescription,
        public ?string $description,
        public ProductState $state,
        public int $categoryId,
    ) {}
}