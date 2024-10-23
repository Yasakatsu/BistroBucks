<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DailyCost extends Model
{
    use HasFactory, SoftDeletes; // ファクトリーを使う、ソフトデリートを使う

    protected $fillable = [
        'shop_id',
        'cost_name',
        'cost_amount',
        'is_fixed',
        'date',
    ];

    // リレーションを定義
    public function shop() // shopsテーブルとのリレーション
    {
        return $this->belongsTo(Shop::class);  // 1(Shop)対多(DailyCost)の関係
    }
}
