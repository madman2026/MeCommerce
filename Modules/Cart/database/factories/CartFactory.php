<?php

namespace Modules\Cart\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use function Illuminate\Support\now;

class CartFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\Cart\Models\Cart::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'session_id' => rand(10,10000),
            'exipres_at' => now()->addDays(10)
        ];
    }
}

