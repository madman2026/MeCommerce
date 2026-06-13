<?php

namespace Modules\Order\States;

use Modules\Order\OrderState;

class Delivered extends OrderState
{
    public function color()
    {
        return 'red';
    }
}