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
        Schema::create('daily_costs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shop_id');  // 外部キー
            $table->string('cost_type');  // コストの種類
            $table->decimal('amount', 8, 2);  // コスト金額
            $table->boolean('is_fixed')->default(false);  // 固定費かどうか
            $table->date('date');  // 発生日
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
        Schema::dropIfExists('daily_costs');
    }
};
