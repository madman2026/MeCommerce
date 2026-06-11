<?php

namespace Modules\Catalog\States;

class Cancelled extends OrderState
{
    public function color()
    {
        return 'red';
    }
}