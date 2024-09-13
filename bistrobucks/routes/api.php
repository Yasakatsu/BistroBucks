<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// BreakEvenPointControllerのresourceを定義
Route::resource('break-even-point', 'BreakEvenPointController');
// CostControllerのresourceを定義
Route::resource('cost', 'CostController');
// InvoiceControllerのresourceを定義
Route::resource('invoice', 'InvoiceController');
// InvoiceItemControllerのresourceを定義
Route::resource('invoice-item', 'InvoiceItemController');
// ProductControllerのresourceを定義
Route::resource('product', 'ProductController');
// ReportControllerのresourceを定義
Route::resource('report', 'ReportController');
// ShopControllerのresourceを定義
Route::resource('shop', 'ShopController');
// TaxControllerのresourceを定義
Route::resource('tax', 'TaxController');
// UserControllerのresourceを定義
Route::resource('user', 'UserController');
