<?php

namespace Modules\User\DTO;

use Spatie\LaravelData\Data;

class UpdateCartData extends Data
{
    public function __construct(
        public string $cartItemId,
        public int $quantity,
    ) {}
}