<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesDetail extends Model
{
    use HasFactory;

    // リレーションを定義
    public function sale() // salesテーブルとのリレーション
    {
        return $this->belongsTo(Sale::class);  // 1(Sale)対多(SalesDetail)の関係
    }
}
