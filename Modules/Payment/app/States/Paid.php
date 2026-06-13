<?php

namespace Modules\Payment\States;

use Modules\Payment\PaymentState;

class Paid extends PaymentState
{
    public function color()
    {
        return 'yellow';
    }
}