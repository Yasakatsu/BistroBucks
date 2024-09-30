<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReceiptDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'receipt_id',
        'item_name',
        'quantity',
        'item_price',
        'item_price_excluding_tax',
        'sale_amount',
    ];
}
