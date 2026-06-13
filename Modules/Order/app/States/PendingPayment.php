<?php

namespace Modules\Order\States;

use Modules\Order\OrderState;

class PendingPayment extends OrderState
{
    public function color()
    {
        return 'yellow';
    }
}