<?php

namespace Modules\User\DTO;

use Spatie\LaravelData\Data;

class AddToCartData extends Data
{
    public function __construct(
        public string $productId,
        public int $quantity,
    ) {}
}