<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    // 店舗は1人のユーザーに属する
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 店舗は複数の伝票を持つ
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    // 店舗は複数のコストを持つ
    public function costs()
    {
        return $this->hasMany(Cost::class);
    }

    // 店舗は複数の損益分岐点を持つ
    public function breakEvenPoints()
    {
        return $this->hasMany(BreakEvenPoint::class);
    }

    // 店舗は複数のレポートを持つ
    public function reports()
    {
        return $this->hasMany(Report::class);
    }
}
