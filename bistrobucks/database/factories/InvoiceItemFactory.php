<?php

namespace Database\Factories;

use App\Models\Invoice;
use App\Models\Product;
use App\Models\Tax;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InvoiceItem>
 */
class InvoiceItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'invoice_id' => Invoice::factory(), // Invoiceとのリレーション
            'tax_id' => Tax::factory(),         // Taxとのリレーション
            'product_id' => Product::factory(), // Productとのリレーション;
            'quantity' => $this->faker->numberBetween(1, 5),
            'unit_price' => $this->faker->randomFloat(2, 100, 1000),
            'discount_amount' => $this->faker->randomFloat(2, 0, 50),
            'subtotal' => $this->faker->randomFloat(2, 100, 1000),
            'total' => $this->faker->randomFloat(2, 100, 1000),
            'guest_count' => $this->faker->numberBetween(1, 10),
        ];
    }
}
