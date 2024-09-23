<?php

namespace Database\Factories;

use App\Models\Sale;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SalesDetail>
 */
class SalesDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'item_name' => $this->faker->word,
            'quantity' => $this->faker->randomFloat(2, 1, 10),  // 1〜10までの数量
            'unit_price' => $this->faker->randomFloat(2, 1, 100),  // 商品単価
            'tax_amount' => $this->faker->randomFloat(2, 1, 20),  // 税金
            'total_amount' => function (array $attributes) {
                return $attributes['quantity'] * $attributes['unit_price'];
            },
            'sales_id' => Sale::factory(),  // 売上とリレーション
        ];
    }
}
