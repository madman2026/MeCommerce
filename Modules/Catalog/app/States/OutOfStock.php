<?php

namespace Modules\Catalog\States;

class OutOfStock extends ProductState
{
    public function color()
    {
        return 'red';
    }
}