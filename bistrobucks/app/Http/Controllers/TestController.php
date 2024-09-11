<?php

namespace App\Http\Controllers;

use App\Models\BreakEvenPoint;
use App\Models\Cost;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Models\Product;
use App\Models\Report;
use App\Models\Shop;
use App\Models\Tax;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    // 全ての店舗データを取得してJSONで返す
    public function index()
    {
        $shops = Shop::all();
        return response()->json($shops);
    }
    // すべてのユーザーデータを取得してJSONで返す
    public function user()
    {
        $users = User::all();
        return response()->json($users);
    }
    // 全ての商品データを取得してJSONで返す
    public function product()
    {
        $products = Product::all();
        return response()->json($products);
    }
    // すべての経費データを取得してJSONで返す
    public function cost()
    {
        $costs = Cost::all();
        return response()->json($costs);
    }
    // すべて伝票データを取得してJSONで返す
    public function invoice()
    {
        $invoices = Invoice::all();
        return response()->json($invoices);
    }
    // すべての伝票詳細データを取得してJSONで返す
    public function invoice_item()
    {
        $invoice_items = InvoiceItem::all();
        return response()->json($invoice_items);
    }
    // すべてのレポートデータを取得してJSONで返す
    public function report()
    {
        $reports = Report::all();
        return response()->json($reports);
    }
    // すべての税金データを取得してJSONで返す
    public function tax()
    {
        $taxes = Tax::all();
        return response()->json($taxes);
    }
    // すべての損益分岐点データを取得してJSONで返す
    public function break_even_point()
    {
        $break_even_points = BreakEvenPoint::all();
        return response()->json($break_even_points);
    }
}
