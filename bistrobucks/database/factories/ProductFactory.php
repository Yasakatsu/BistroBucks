<?php

namespace Database\Factories;

use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'category' => $this->faker->randomElement(['Food', 'Drink', 'Other']),
            'unit_price' => $this->faker->randomFloat(2, 1, 100),  // 1〜100までのランダム価格
            'shop_id' => Shop::factory(),  // 店舗とリレーション
        ];
    }
}
