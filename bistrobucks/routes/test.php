<?php

use App\Http\Controllers\TestController;
use Illuminate\Routing\Route;

// テスト用のルート。すべての店舗データを取得してJSONで返す。
Route::get('/test-shops', [TestController::class, 'index']);
