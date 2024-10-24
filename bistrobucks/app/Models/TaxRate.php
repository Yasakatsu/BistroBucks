<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxRate extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_id',
        'setting_id',
        'name',
        'rate',
        'is_default',
    ];

    // リレーションを定義
    public function shop() // shopsテーブルとのリレーション
    {
        return $this->belongsTo(Shop::class);  // 1(Shop)対1(TaxRate)の関係
    }
    public function setting() // settingsテーブルとのリレーション
    {
        return $this->belongsTo(Setting::class);  // 1(Setting)対1(TaxRate)の関係
    }
}
