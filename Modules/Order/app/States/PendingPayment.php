<?php

namespace Modules\Catalog\States;

class PendingPayment extends OrderState
{
    public function color()
    {
        return 'yellow';
    }
}