<?php

namespace Modules\Payment\DTO;

use Spatie\LaravelData\Data;

class VerifyPaymentData extends Data
{
    public function __construct(
        public string $authority,
        public string $gateway,
    ) {}
}