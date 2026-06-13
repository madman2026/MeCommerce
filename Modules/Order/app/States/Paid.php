<?php

namespace Modules\Order\States;

use Modules\Order\OrderState;

class Paid extends OrderState
{
    public function color()
    {
        return 'yellow';
    }
}