<?php

namespace Modules\User\DTO;

use Illuminate\Support\Collection;
use Modules\User\Models\Address;
use Modules\User\Models\User;
use Spatie\LaravelData\Data;

class CreateOrderData extends Data
{
    public function __construct(
        public User $user,
        public Address $address,
        public Collection $items,
    ) {}
}