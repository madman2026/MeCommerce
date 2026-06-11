<?php

namespace Modules\Catalog\DTO;

use Spatie\LaravelData\Data;

class UpdateProductData extends Data
{
    public function __construct(
        public ?string $name,
        public ?int $price,
        public ?int $salePrice,
        public ?string $description,
    ) {}
}