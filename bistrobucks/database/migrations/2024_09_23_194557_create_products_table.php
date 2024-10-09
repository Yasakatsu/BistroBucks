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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shop_id');  // 外部キー
            $table->string('name');
            $table->string('category')->nullable();  // 商品カテゴリ
            $table->decimal('unit_price', 8, 2);  // 税込価格
            $table->date('start_date')->nullable();  // 販売開始日
            $table->date('end_date')->nullable();  // 販売終了日
            $table->string('image_path')->nullable();  // 商品画像
            $table->string('description')->nullable();  // 商品説明
            $table->integer('version')->default(1);  // バージョン(バージョン管理)
            $table->softDeletes(); // 論理削除
            $table->timestamps();

            // 外部キー制約・・・shop_idはshopsテーブルのidと紐づく
            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');
            // ユニーク制約(商品名とバージョン)・・・同じ商品名でもバージョンが違えば登録できる
            $table->unique(['name', 'version']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
