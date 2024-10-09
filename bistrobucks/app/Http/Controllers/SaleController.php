<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\SaleDetail;
use Inertia\Inertia;

class SaleController extends Controller
{
    public function index()
    {
        $sales = Sale::with('saleDetails')->get();
        // dd($sales); // ここでデータを取得しているか確認
        $saleDetails = SaleDetail::with('product', 'sale')
            ->orderBy('id', 'desc')
            ->take(5)
            ->get();
        // dd($saleDetails); // ここでデータを取得しているか確認

        return Inertia::render(
            'Sale/Dashboard',
            ['sales' => $sales, 'saleDetails' => $saleDetails,]
        );
    }
}
