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
            $table->foreignId('shop_id')->constrained()->onDelete('cascade');  // 店舗ID
            $table->foreignId('tax_rate_id')->constrained()->onDelete('cascade');  // 税率ID
            $table->decimal('total_sale_amount', 8, 2);  // 売上金額(8桁の整数部分と2桁の小数部分. 例: 12345.67/ 1000円の場合は1000.00/ 100円の場合は100.00/ 10円の場合は10.00)
            $table->decimal('discount_amount', 8, 2)->nullable();  // 割引金額(8桁の整数部分と2桁の小数部分/ 例: 12345.67/ 1000円の場合は1000.00/ 100円の場合は100.00/ 10円の場合は10.00)
            $table->decimal('tax_amount', 8, 2);  // 税金額(8桁の整数部分と2桁の小数部分/ 例: 12345.67/ 1000円の場合は1000.00/ 100円の場合は100.00/ 10円の場合は10.00)
            $table->integer('customer_amount'); // 来客人数(必須/ 例: 1/ 2/ 3)
            $table->integer('new_customer_amount');  // 新規顧客の人数(必須)
            $table->integer('repeat_customer_amount');  // リピーター顧客の人数(必須)
            $table->integer('referral_customer_amount');  // 紹介顧客の人数(必須)
            $table->string('payment_detail');  // 支払い方法(必須/ 例: 現金/ クレジットカード/ デビットカード)
            $table->string('consumption_type')->nullable();  // 消費タイプ（店内飲食/テイクアウト）
            $table->date('date');  // 売上発生日(必須/ 例: 2024-09-30)
            $table->timestamps();
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
