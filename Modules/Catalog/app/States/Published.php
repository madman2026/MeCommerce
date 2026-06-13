<?php

namespace Modules\Catalog\States;

use Modules\Catalog\ProductState;

class Published extends ProductState
{
    public function color()
    {
        return 'green';
    }
}