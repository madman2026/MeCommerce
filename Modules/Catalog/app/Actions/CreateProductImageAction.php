<?php

namespace Modules\Catalog\Actions;

use Illuminate\Support\Facades\DB;
use Modules\Catalog\DTO\ProductData;
use Modules\Catalog\Events\ProductCreated;
use Modules\Catalog\Models\Product;
use Modules\User\Models\User;

class CreateProductImageAction
{
    public function execute(Product $product, array $images)
    {
        return DB::transaction(function () use ($product, $images) {

            return collect($images)->map(function ($image) use ($product) {
                return $product->images()->create([
                    'path' => $image,
                ]);
            });

        });
    }
}