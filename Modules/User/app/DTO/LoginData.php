<?php

namespace Modules\User\DTO;

use Spatie\LaravelData\Data;

class LoginData extends Data
{
    public function __construct(
        public string $mobile,
        public string $password,
    ) {}
}