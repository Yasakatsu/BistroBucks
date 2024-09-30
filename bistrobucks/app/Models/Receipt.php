<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_id',
        'total_sale_amount',
        'discount_amount',
        'tax_rate',
        'tax_amount',
        'table_number',
        'customer_amount',
        'payment_detail',
        'consumption_type',
        'date',
    ];
}
