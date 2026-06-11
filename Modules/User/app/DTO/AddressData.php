<?php

namespace Modules\User\DTO;

use Spatie\LaravelData\Data;

class AddressData extends Data
{
    public function __construct(
        public string $title,
        public string $receiverName,
        public string $receiverMobile,
        public string $province,
        public string $city,
        public string $postalCode,
        public string $address,
    ) {}
}