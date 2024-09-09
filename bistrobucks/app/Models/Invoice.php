<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    // 伝票は1人のユーザーに属する
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 伝票は1つの店舗に属する
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    // 伝票は複数の伝票詳細を持つ
    public function invoiceItems()
    {
        return $this->hasMany(InvoiceItem::class);
    }
}
