<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sale_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sale_id')->constrained()->onDelete('cascade');  // 売上ID
            $table->foreignId('product_id')->constrained()->onDelete('cascade');  // 商品ID
            $table->integer('quantity');  // 数量(必須, 例: 1/ 2/ 3)
            $table->decimal('item_price', 8, 2);  // 税込販売単価
            $table->decimal('item_price_excluding_tax', 8, 2)->nullable();  // 税別販売単価
            $table->decimal('sale_amount', 8, 2);  // 合計金額(必須, 例: 1000.00/ 100.00/ 10.00)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_details');
    }
};
