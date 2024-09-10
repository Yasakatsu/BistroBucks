<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
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
            //
            'product_name' => $this->faker->word,              // 商品名
            'description' => $this->faker->sentence,           // 商品説明
            'price' => $this->faker->randomFloat(2, 10, 500),  // 価格
            // 'stock_quantity' => $this->faker->numberBetween(0, 100), // 在庫数
            // 'category_id' => Category::factory(),  // カテゴリとのリレーション
        ];
    }
}
