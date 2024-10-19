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
        $saleDetails = SaleDetail::with('product', 'sale')->orderBy('id', 'desc')->get();

        return Inertia::render('Sale', ['sales' => $sales, 'saleDetails' => $saleDetails,]);
    }
}
