<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// BreakEvenPointControllerのresourceを定義
Route::resource('break-even-point', 'App\Http\Controllers\BreakEvenPointController');
// CostControllerのresourceを定義
Route::resource('cost', 'App\Http\Controllers\CostController');
// InvoiceControllerのresourceを定義
Route::resource('invoice', 'App\Http\Controllers\InvoiceController');
// InvoiceItemControllerのresourceを定義
Route::resource('invoice-item', 'App\Http\Controllers\InvoiceItemController');
// ProductControllerのresourceを定義
Route::resource('product', 'App\Http\Controllers\ProductController');
// ReportControllerのresourceを定義
Route::resource('report', 'App\Http\Controllers\ReportController');
// ShopControllerのresourceを定義
Route::resource('shop', 'App\Http\Controllers\ShopController');
// TaxControllerのresourceを定義
Route::resource('tax', 'App\Http\Controllers\TaxController');
// UserControllerのresourceを定義
Route::resource('user', 'App\Http\Controllers\UserController');
