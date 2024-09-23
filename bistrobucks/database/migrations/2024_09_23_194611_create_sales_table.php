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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shop_id');  // 外部キー
            $table->string('receipt_number')->nullable();  // 伝票番号
            $table->decimal('amount', 8, 2);  // 売上金額
            $table->decimal('tax_amount', 8, 2);  // 税金額
            $table->decimal('tax_rate', 5, 2);  // 税率
            $table->integer('number_of_customers')->nullable();  // 来客人数
            $table->string('payment_method')->nullable();  // 支払い方法
            $table->string('consumption_type')->nullable();  // 消費タイプ（店内/テイクアウト）
            $table->date('date');  // 売上発生日
            $table->timestamps();

            // 外部キー制約
            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
