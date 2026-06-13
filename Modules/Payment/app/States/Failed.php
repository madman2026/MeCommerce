<?php

namespace Modules\Payment\States;

use Modules\Payment\PaymentState;

class Failed extends PaymentState
{
    public function color()
    {
        return 'green';
    }
}