<?php

namespace Database\Factories;

use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shop>
 */
class DailyCostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'shop_id' => Shop::factory(),
            'cost_type' => $this->faker->word,
            'amount' => $this->faker->randomFloat(2, 0, 100),
            'is_fixed' => $this->faker->boolean,
            'date' => $this->faker->date(),
        ];
    }
}
