<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_id',
        'tax_rate_id',
    ];

    // リレーションを定義
    public function shop() // shopsテーブルとのリレーション
    {
        return $this->belongsTo(Shop::class);  // 1(Shop)対1(Setting)の関係
    }
    public function taxRates() // tax_ratesテーブルとのリレーション
    {
        return $this->hasMany(TaxRate::class);  // 1(Setting)対多(TaxRate)の関係
    }
}
