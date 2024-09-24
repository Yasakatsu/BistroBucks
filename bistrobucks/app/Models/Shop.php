<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    // リレーションを定義
    public function user()
    {
        return $this->belongsTo(User::class);  // ユーザーに属する
    }
    public function products()
    {
        return $this->hasMany(Product::class);  // 1対多のリレーション
    }
    public function setting()
    {
        return $this->hasOne(Setting::class);  // 1対1のリレーション
    }
    public function dailyCosts()
    {
        return $this->hasMany(DailyCost::class);  // 1対多のリレーション
    }
    public function sales()
    {
        return $this->hasMany(Sale::class);  // 1対多のリレーション
    }

    // 許可するカラムを定義
    protected $fillable =
    [
        'name',
        'location',
        'user_id',
    ];
}
