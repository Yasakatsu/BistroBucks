<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tax>
 */
class TaxFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tax_rate' => $this->faker->randomFloat(2, 5, 20), // 税率
            'description' => $this->faker->sentence,           // 説明
            'applied_on' => $this->faker->dateTimeThisYear,    // 適用開始日
        ];
    }
}
