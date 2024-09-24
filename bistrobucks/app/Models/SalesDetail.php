<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SalesDetail extends Model
{
    use HasFactory, SoftDeletes; // ファクトリーを使う、ソフトデリートを使う

    // リレーションを定義
    public function sale() // salesテーブルとのリレーション
    {
        return $this->belongsTo(Sale::class);  // 1(Sale)対多(SalesDetail)の関係
    }
}
