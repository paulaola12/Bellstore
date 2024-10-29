<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'product_name' => fake()->name(),
            'categorys_id' => fake()->numberBetween(1, 20),
            'price' => fake()->numberBetween(100, 200),
            'description' => fake()->name(),
            'picture' => fake()->imageUrl(),
        ];
    }
}
