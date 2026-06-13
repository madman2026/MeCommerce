<?php

namespace Modules\Order\States;

use Modules\Order\OrderState;

class Shipped extends OrderState
{
    public function color()
    {
        return 'green';
    }
}