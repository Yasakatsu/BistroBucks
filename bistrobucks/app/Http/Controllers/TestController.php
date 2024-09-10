<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        // 全ての店舗データを取得してJSONで返す
        $shops = Shop::all();
        return response()->json($shops);
    }
}
