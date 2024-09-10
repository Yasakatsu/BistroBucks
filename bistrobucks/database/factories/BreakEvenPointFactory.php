<?php

namespace Database\Factories;

use App\Models\Shop;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BreakEvenPoint>
 */
class BreakEvenPointFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // BreakEvenPointsマイグレーションファイルのカラムに合わせて、以下のカラムを追加
            'user_id' => User::factory(), // ユーザーとのリレーション
            'shop_id' => Shop::factory(), // 店舗とのリレーション
            'required_revenue' => $this->faker->randomFloat(2, 5000, 20000),   // 必要売上
            'required_customers' => $this->faker->numberBetween(50, 200),      // 必要来客数
        ];
    }
}
