<?php
namespace Modules\Catalog\States;

use Modules\Catalog\ProductState;

class Archived extends ProductState
{
    public function color()
    {
        return 'yellow';
    }
}