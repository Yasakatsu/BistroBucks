<?php

namespace Database\Factories;

use App\Models\Shop;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(), // ユーザーとのリレーション
            'shop_id' => Shop::factory(), // Shopモデルとのリレーション
            'invoice_number' => $this->faker->unique()->numerify('INV-####'),
            'total_amount' => $this->faker->randomFloat(2, 1000, 10000),
        ];
    }
}
