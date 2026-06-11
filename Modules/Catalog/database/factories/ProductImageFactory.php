<?php

namespace Modules\Catalog\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\Catalog\Models\ProductImage::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}

