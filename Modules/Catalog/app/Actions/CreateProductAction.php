<?php

namespace Modules\Catalog\Actions;

use Modules\Catalog\DTO\ProductData;
use Spatie\QueueableAction\QueueableAction;

class CreateProductAction
{
    use QueueableAction;

    /**
     * Create a new action instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Prepare the action for execution, leveraging constructor injection.
    }

    /**
     * Execute the action.
     *
     * @return mixed
     */
    public function execute(ProductData $data)
    {
        
    }
}
