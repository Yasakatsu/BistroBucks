<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes; // ファクトリーを使う、ソフトデリートを使う

    protected $fillable = [
        'shop_id',
        'name',
        'category',
        'unit_price',
        'start_date',
        'end_date',
        'image_path',
        'description',
        'version',
    ];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
    public function saleDetail()
    {
        return $this->hasMany(SaleDetail::class);
    }
}
