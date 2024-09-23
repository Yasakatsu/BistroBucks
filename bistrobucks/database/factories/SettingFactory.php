<?php

namespace Database\Factories;

use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting>
 */
class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'standard_tax_rate' => 10,  // 標準税率10%
            'reduced_tax_rate' => 8,    // 軽減税率8%
            'shop_id' => Shop::factory(),  // 店舗とリレーション
        ];
    }
}
