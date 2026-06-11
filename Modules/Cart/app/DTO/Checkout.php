<?php

namespace Modules\User\DTO;

use Spatie\LaravelData\Data;

class Checkout extends Data
{
    public function __construct(
        public string $addressId,
        public ?string $description,
    ) {}
}