<?php

namespace Modules\Catalog\States;

class Shipped extends OrderState
{
    public function color()
    {
        return 'green';
    }
}