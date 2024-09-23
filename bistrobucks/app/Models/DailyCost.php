<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyCost extends Model
{
    use HasFactory;

    // リレーションを定義
    public function shop() // shopsテーブルとのリレーション
    {
        return $this->belongsTo(Shop::class);  // 1(Shop)対多(DailyCost)の関係
    }
}
