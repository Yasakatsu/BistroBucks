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
        Schema::create('sales_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sales_id');  // 外部キー
            $table->string('item_name');  // 商品名
            $table->decimal('quantity', 8, 2);  // 数量
            $table->decimal('unit_price', 8, 2);  // 単価
            $table->decimal('tax_amount', 8, 2);  // 税金額
            $table->decimal('total_amount', 8, 2);  // 合計金額
            $table->timestamps();

            // 外部キー制約
            $table->foreign('sales_id')->references('id')->on('sales')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_details');
    }
};
