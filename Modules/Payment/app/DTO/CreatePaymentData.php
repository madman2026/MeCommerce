<?php

namespace Modules\Payment\DTO;

use Spatie\LaravelData\Data;

class CreatePaymentData extends Data
{
    public function __construct(
        public string $orderId,
        public string $gateway,
    ) {}
}