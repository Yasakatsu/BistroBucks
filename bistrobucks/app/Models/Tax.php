<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    use HasFactory;

    // 消費税は複数の伝票詳細に関連する
    public function invoiceItems()
    {
        return $this->hasMany(InvoiceItem::class);
    }
}
