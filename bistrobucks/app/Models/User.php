<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * 配列に対して非表示にする属性（hidden）を指定
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * キャストする属性を取得（キャスト：データ型を変換すること）
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    //　リレーションを定義
    public function shops()// shopsテーブルとのリレーション
    {
        return $this->hasMany(Shop::class);
    }

    public function invoices()// invoicesテーブルとのリレーション
    {
        return $this->hasMany(Invoice::class);
    }

    public function costs()// costsテーブルとのリレーション
    {
        return $this->hasMany(Cost::class);
    }

    public function breakEvenPoints()// break_even_pointsテーブルとのリレーション
    {
        return $this->hasMany(BreakEvenPoint::class);
    }

    public function reports()// reportsテーブルとのリレーション
    {
        return $this->hasMany(Report::class);
    }
}
