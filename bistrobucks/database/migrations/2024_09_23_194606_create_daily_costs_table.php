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
            $table->foreignId('shop_id')->constrained()->onDelete('cascade');  // 店舗ID
            $table->string('cost_name');  // コスト名
            $table->decimal('cost_amount', 8, 2);  // コスト金額
            $table->boolean('is_fixed')->default(false);  // 固定費かどうか（初期値は変動費）
            $table->date('date');  // 発生日
            $table->timestamps();
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
