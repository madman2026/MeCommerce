<?php

namespace Modules\Order\States;

use Modules\Order\OrderState;

class Processing extends OrderState
{
    public function color()
    {
        return 'red';
    }
}