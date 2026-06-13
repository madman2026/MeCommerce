<?php

namespace Modules\Catalog\Actions;

use Illuminate\Support\Facades\DB;
use Modules\Catalog\DTO\ProductData;
use Modules\Catalog\Events\ProductCreated;
use Modules\Catalog\Models\Product;
use Modules\User\Models\User;

class ReserveInventoryAction
{
    public function execute(ProductData $data, User $user): Product
    {
        return DB::transaction(function () use ($data, $user) {

            $product = new Product();

            $product->fill($data->toArray());

            $product->user()->associate($user);

            $product->save();

            ProductCreated::dispatch($product);

            return $product;
        });
    }
}