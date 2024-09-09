<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    use HasFactory;

    // 伝票詳細は1つの伝票に属する
    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    // 伝票詳細は1つの消費税に属する
    public function tax()
    {
        return $this->belongsTo(Tax::class);
    }
}
