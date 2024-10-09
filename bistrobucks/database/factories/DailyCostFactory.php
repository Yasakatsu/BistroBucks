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
            'cost_name' => $this->faker->word,
            'cost_amount' => $this->faker->numberBetween(1, 1000),
            'is_fixed' => $this->faker->boolean,
            'date' => $this->faker->date(),
        ];
    }
}
