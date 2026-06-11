<?php

namespace Modules\Catalog\DTO;

use Modules\Catalog\States\ProductState;
use Spatie\LaravelData\Data;

class UpdateProductData extends Data
{
    public function __construct(
        public ?string $search,
        public ?string $state,
        public ?int $category,
        public ?string $sort,
    ) {}
}