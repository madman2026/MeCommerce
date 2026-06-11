<?php

namespace Modules\User\DTO;

use Spatie\LaravelData\Data;

class RegisterData extends Data
{
    public function __construct(
        public string $name,
        public string $mobile,
        public string $password,
    ) {}
}