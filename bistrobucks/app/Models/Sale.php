<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sale extends Model
{
    use HasFactory, SoftDeletes; // ファクトリーを使う、ソフトデリートを使う

    // リレーションを定義
    public function shop() // shopsテーブルとのリレーション
    {
        return $this->belongsTo(Shop::class); // 1(Shop)対多(Sale)の関係
    }

    public function details() // sales_detailsテーブルとのリレーション
    {
        return $this->hasMany(SalesDetail::class); // 多(Sale)対1(SalesDetail)の関係
    }
}
