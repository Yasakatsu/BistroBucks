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
            $table->unsignedBigInteger('shop_id');  // 外部キー
            $table->string('name', 255);  // 税率名(必須, 例: 通常税率/ 軽減税率)
            $table->decimal('rate', 8, 2);  // 税率(必須, 例: 0.10/ 0.08/ 0.05)
            $table->boolean('is_default')->default(true);  // デフォルトフラグ(必須, 例: 0/ 1)
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
        Schema::dropIfExists('tax_rates');
    }
};
