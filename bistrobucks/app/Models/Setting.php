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
    public function taxRate() // tax_ratesテーブルとのリレーション
    {
        return $this->belongsTo(TaxRate::class);  // 1(Setting)対1(TaxRate)の関係
    }
}
