<?php

namespace Database\Factories;

use App\Models\Shop;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cost>
 */
class CostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Costsマイグレーションファイルのカラムに合わせて、以下のカラムを追加
            'user_id' => User::factory(), // ユーザーとのリレーション
            'shop_id' => Shop::factory(), // 店舗とのリレーション
            'water_cost' => $this->faker->randomFloat(2, 0, 1000),
            'gas_cost' => $this->faker->randomFloat(2, 0, 1000),
            'electric_cost' => $this->faker->randomFloat(2, 0, 1000),
            'labor_cost' => $this->faker->randomFloat(2, 0, 1000),
            'supply_cost' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }
}
