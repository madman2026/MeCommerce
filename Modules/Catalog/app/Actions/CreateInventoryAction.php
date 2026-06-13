<?php

namespace Modules\Catalog\Actions;

use Illuminate\Support\Facades\DB;
use InvalidArgumentException;
use Modules\Catalog\Models\Product;

class CreateInventoryAction
{
    public function execute(Product $product, int $quantity): Product
    {
        if ($quantity < 0) {
            throw new InvalidArgumentException(
                'Inventory quantity cannot be negative.'
            );
        }

        return DB::transaction(function () use ($product, $quantity) {

            $product->inventory()->create([
                'quantity' => $quantity,
                'reserved_quantity' => 0
            ]);

            return $product->load('inventory');
        });
    }
}