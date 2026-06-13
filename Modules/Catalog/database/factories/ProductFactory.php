<?php

namespace Modules\Catalog\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Catalog\Models\Product;
use Modules\Catalog\ProductState;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        $price = random_int(10000 , 999999);
        $name  = fake()->text(10);
        $state = fake()->randomElement(ProductState::all());
        return [
            'name' => $name,
            'price' => $price,
            'sale_price' => $price - 10000,
            'short_description' => fake()->text(1000),
            'description' => fake()->text(100000),
            'stock' => rand(0,100),
            'weight' => rand(1,10000),
            'state' => $state,
            'sku' => fake()->unique(),
            'published_at' => now()
        ];
    }
}
