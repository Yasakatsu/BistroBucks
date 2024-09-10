<?php

namespace Database\Seeders;

use App\Models\BreakEvenPoint;
use App\Models\Cost;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Models\Product;
use App\Models\Report;
use App\Models\Shop;
use App\Models\Tax;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //各モデル毎にファクトリーを呼び出す。リレーションはファクトリーで設定しているので、ここで呼び出すだけでリレーションが設定される。
        User::factory(10)->create();
        Shop::factory(10)->create();
        Invoice::factory(10)->create();
        Tax::factory(10)->create();
        InvoiceItem::factory(10)->create();
        Cost::factory(10)->create();
        BreakEvenPoint::factory(10)->create();
        Report::factory(10)->create();
        Product::factory(10)->create();
    }
}
