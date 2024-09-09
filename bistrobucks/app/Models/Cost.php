<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    use HasFactory;

    // コストは1人のユーザーに属する
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // コストは1つの店舗に属する
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}
