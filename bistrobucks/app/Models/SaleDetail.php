<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'sale_id',
        'product_id',
        'quantity',
        'item_price',
        'item_price_excluding_tax',
        'sale_amount',
    ];

    //********************** */
    // リレーション定義
    //********************** */
    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // SaleDetailモデルが初期化されるときに自動的に呼び出されるメソッド
    protected static function boot()
    {
        // bootメソッドを使用する時のおまじない
        parent::boot();

        // SaleDetailモデルが作成されるときに自動的に呼び出される
        static::creating(function ($saleDetailInstance) {
            if (is_null($saleDetailInstance->item_price)) {
                $product = Product::find($saleDetailInstance->product_id);
                $saleDetailInstance->item_price = $product->unit_price;
            }
        });
    }
}
