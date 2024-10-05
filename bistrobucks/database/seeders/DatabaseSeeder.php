<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\DailyCost;
use App\Models\Product;
use App\Models\Sale;
use App\Models\SaleDetail;
use App\Models\Setting;
use App\Models\Shop;
use App\Models\TaxRate;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Shop::factory(10)->create();
        Setting::factory(10)->create();
        DailyCost::factory(10)->create();
        Product::factory(10)->create();
        Sale::factory(10)->create();
        SaleDetail::factory(10)->create();
        TaxRate::factory(10)->create();
    }
}
