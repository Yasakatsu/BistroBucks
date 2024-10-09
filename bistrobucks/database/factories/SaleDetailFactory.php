<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Sale;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SaleDetail>
 */
class SaleDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sale_id' => Sale::factory(),
            'product_id' => Product::factory(),
            'quantity' => $this->faker->numberBetween(1, 100),
            'item_price' => $this->faker->randomFloat(2, 0, 1000),
            'item_price_excluding_tax' => $this->faker->randomFloat(2, 0, 1000),
            'sale_amount' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }
}
