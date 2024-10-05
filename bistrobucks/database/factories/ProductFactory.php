<?php

namespace Database\Factories;

use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shop>
 */
class ProductFactory extends Factory
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
            'name' => $this->faker->foodName(),
            'category' => $this->faker->word,
            'unit_price' => $this->faker->randomFloat(2, 0, 1000),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'image_path' => $this->faker->word,
            'description' => $this->faker->text,
            'version' => $this->faker->randomNumber(),
        ];
    }
}
