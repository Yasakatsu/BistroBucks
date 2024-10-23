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
        Schema::create('tax_rates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shop_id')->constrained()->onDelete('cascade');  // 店舗ID(必須)
            $table->foreignId('setting_id')->constrained()->onDelete('cascade');  // 設定ID(必須)
            $table->string('name', 255);  // 税率名(必須, 例: 通常税率/ 軽減税率)
            $table->decimal('rate', 8, 2);  // 税率(必須, 例: 0.10/ 0.08/ 0.05)
            $table->tinyInteger('is_default')->default(1);  // デフォルトフラグ(必須, 0: デフォルトでない, 1: デフォルト)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tax_rates');
    }
};
