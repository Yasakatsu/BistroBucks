<?php

namespace Database\Factories;

use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'receipt_number' => $this->faker->uuid,  // ランダムな伝票番号
            'amount' => $this->faker->randomFloat(2, 10, 1000),  // 売上金額
            'tax_amount' => $this->faker->randomFloat(2, 1, 100),  // 税金額
            'tax_rate' => 10,  // 固定の税率（例として10%）
            'number_of_customers' => $this->faker->numberBetween(1, 10),  // 来客人数
            'payment_method' => $this->faker->randomElement(['cash', 'credit_card']),
            'consumption_type' => $this->faker->randomElement(['eat_in', 'take_out']),
            'date' => $this->faker->date,
            'shop_id' => Shop::factory(),  // 店舗とリレーション
        ];
    }
}
