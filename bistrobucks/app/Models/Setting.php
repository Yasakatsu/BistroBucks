<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    // リレーションを定義
    public function shop() // shopsテーブルとのリレーション
    {
        return $this->belongsTo(Shop::class);  // 1(Shop)対1(Setting)の関係
    }
}
