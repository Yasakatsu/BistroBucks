<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // 商品は複数の伝票商品を持つ
    public function invoiceItems()
    {
        return $this->hasMany(InvoiceItem::class);
    }

}
