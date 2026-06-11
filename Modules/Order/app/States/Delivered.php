<?php

namespace Modules\Catalog\States;

class Delivered extends OrderState
{
    public function color()
    {
        return 'red';
    }
}