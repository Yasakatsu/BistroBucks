<?php

namespace Database\Factories;

use App\Models\Shop;
use App\Models\TaxRate;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shop>
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
            'shop_id' => Shop::factory(),
            'tax_rate_id' => TaxRate::factory(),
            'total_sale_amount' => $this->faker->randomFloat(2, 0, 1000),
            'discount_amount' => $this->faker->randomFloat(2, 0, 1000),
            'tax_amount' => $this->faker->randomFloat(2, 0, 1000),
            'customer_amount' => $this->faker->numberBetween(1, 100),
            'new_customer_amount' => $this->faker->numberBetween(1, 100),
            'repeat_customer_amount' => $this->faker->numberBetween(1, 100),
            'referral_customer_amount' => $this->faker->numberBetween(1, 100),
            'payment_detail' => $this->faker->randomElement(['現金', 'クレジットカード', 'デビットカード', '電子マネー', 'QRコード', 'その他']),
            'consumption_type' => $this->faker->randomElement(['店内飲食', 'テイクアウト']),
            'date' => $this->faker->date(),
        ];
    }
}
