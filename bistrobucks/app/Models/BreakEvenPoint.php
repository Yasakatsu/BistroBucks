<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BreakEvenPoint extends Model
{
    use HasFactory;

    // 損益分岐点は1人のユーザーに属する
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 損益分岐点は1つの店舗に属する
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}
