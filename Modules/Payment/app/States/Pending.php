<?php

namespace Modules\Catalog\States;

class Pending extends PaymentState
{
    public function color()
    {
        return 'yellow';
    }
}