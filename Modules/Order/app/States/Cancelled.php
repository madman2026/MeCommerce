<?php

namespace Modules\Order\States;

use Modules\Order\OrderState;

class Cancelled extends OrderState
{
    public function color()
    {
        return 'red';
    }
}