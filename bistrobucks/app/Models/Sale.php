<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_id',
        'tax_rate_id',
        'total_sale_amount',
        'discount_amount',
        'tax_rate',
        'tax_amount',
        'table_number',
        'customer_amount',
        'new_customer_amount',
        'repeat_customer_amount',
        'referral_customer_amount',
        'payment_detail',
        'consumption_type',
        'date',
    ];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function saleDetails()
    {
        return $this->hasMany(SaleDetail::class);
    }
}
