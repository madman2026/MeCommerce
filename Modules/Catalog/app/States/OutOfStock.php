<?php
namespace Modules\Catalog\States;

use Modules\Catalog\ProductState;

class OutOfStock extends ProductState
{
    public function color()
    {
        return 'red';
    }
}