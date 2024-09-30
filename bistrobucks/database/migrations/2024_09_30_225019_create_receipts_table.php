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
        Schema::create('receipts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shop_id');  // 外部キー
            $table->decimal('total_sale_amount', 8, 2);  // 売上金額(8桁の整数部分と2桁の小数部分. 例: 12345.67/ 1000円の場合は1000.00/ 100円の場合は100.00/ 10円の場合は10.00)
            $table->decimal('discount_amount', 8, 2)->nullable();  // 割引金額(8桁の整数部分と2桁の小数部分/ 例: 12345.67/ 1000円の場合は1000.00/ 100円の場合は100.00/ 10円の場合は10.00)
            $table->decimal('tax_rate', 5, 2);  // 税率(5桁の整数部分と2桁の小数部分/ 例: 12.34/ 10%の場合は10.00/ 8%の場合は8.00)
            $table->decimal('tax_amount', 8, 2);  // 税金額(8桁の整数部分と2桁の小数部分/ 例: 12345.67/ 1000円の場合は1000.00/ 100円の場合は100.00/ 10円の場合は10.00)
            $table->integer('table_number')->nullable();  // テーブル番号(任意)
            $table->integer('customer_amount'); // 来客人数(必須/ 例: 1/ 2/ 3)
            $table->string('payment_detail')->nullable();  // 支払い方法(任意)
            $table->string('consumption_type')->nullable();  // 消費タイプ（店内飲食/テイクアウト）
            $table->date('date');  // 売上発生日(必須/ 例: 2024-09-30)
            $table->timestamps();
            // shopsテーブルのidカラムに存在しない値を挿入しようとするとエラーが発生する
            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receipts');
    }
};
