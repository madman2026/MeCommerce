<?php

namespace Modules\User\DTO;

use Illuminate\Support\Collection;
use Modules\User\Models\Address;
use Modules\User\Models\User;
use Spatie\LaravelData\Data;

class OrderData extends Data
{
    public function __construct(
        public string $id,
        public string $number,
        public string $state,
        public int $total,
    ) {}
}