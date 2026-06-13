<?php

namespace Modules\Payment\States;

use Modules\Payment\PaymentState;

class Pending extends PaymentState
{
    public function color()
    {
        return 'yellow';
    }
}