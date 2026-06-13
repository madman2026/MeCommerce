<?php
namespace Modules\Catalog\States;

use Modules\Catalog\ProductState;

class Draft extends ProductState
{
    public function color()
    {
        return 'yellow';
    }
}