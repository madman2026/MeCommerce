<?php

namespace Modules\Catalog\Actions;

use Illuminate\Support\Facades\DB;
use Modules\Catalog\DTO\ProductData;
use Modules\Catalog\Events\ProductCreated;
use Modules\Catalog\Models\Product;
use Modules\User\Models\User;

class CreateProductAction
{
    public function execute(ProductData $data): Product
    {
        $product = Product::create($data->except('categoryId' , 'images')->toArray());

        $product->categories()->sync($data->categoryId);

        app(CreateInventoryAction::class)->execute(
            product: $product,
            quantity: $data->quantity
        );

        app(CreateProductImageAction::class)->execute(
            product: $product,
            images: $data->images
        );

        ProductCreated::dispatch($product);

        return $product->fresh();
    }
}