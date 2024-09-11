<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

// テスト用のルート。
Route::get('/test-shops', [TestController::class, 'index']);
Route::get('/test-users', [TestController::class, 'user']);
Route::get('/test-products', [TestController::class, 'product']);
Route::get('/test-costs', [TestController::class, 'cost']);
Route::get('/test-invoices', [TestController::class, 'invoice']);
Route::get('/test-invoice-items', [TestController::class, 'invoice_item']);
Route::get('/test-reports', [TestController::class, 'report']);
Route::get('/test-taxes', [TestController::class, 'tax']);
Route::get('/test-break-even-points', [TestController::class, 'break_even_point']);
