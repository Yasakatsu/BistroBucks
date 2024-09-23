<?php

namespace Database\Factories;

use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DailyCost>
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
            'cost_type' => $this->faker->randomElement(['Rent', 'Utilities', 'Labor']),
            'amount' => $this->faker->randomFloat(2, 100, 1000),  // 100〜1000までのランダム金額
            'is_fixed' => $this->faker->boolean,  // 固定費か変動費か
            'date' => $this->faker->date,
            'shop_id' => Shop::factory(),  // 店舗とリレーション
        ];
    }
}
