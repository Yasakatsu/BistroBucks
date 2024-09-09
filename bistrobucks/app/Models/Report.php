<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    // レポートは1人のユーザーに属する
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // レポートは1つの店舗に属する
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}
