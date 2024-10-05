<?php

namespace Database\Factories;

use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TaxRate>
 */
class TaxRateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->randomElement(['通常税率', '軽減税率']);
        $rate = $name === '通常税率' ? 10.0 : 8.0;

        return [
            'shop_id' => Shop::factory(),
            'name' => $name,
            'rate' => $rate,
            'is_default' => $this->faker->boolean,
        ];
    }
}
