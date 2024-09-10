<?php

namespace Database\Factories;

use App\Models\Shop;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Report>
 */
class ReportFactory extends Factory
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
            'shop_id' => Shop::factory(),  // 店舗とのリレーション
            'report_type' => $this->faker->randomElement(['Monthly', 'Quarterly', 'Annual']), // レポートタイプ
            'start_date' => $this->faker->date(),     // 開始日
            'end_date' => $this->faker->date(),       // 終了日
        ];
    }
}
