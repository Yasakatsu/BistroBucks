<?php

namespace App\Http\Controllers;

use App\Http\Requests\DailyCostRequest;
use App\Models\DailyCost;
use Illuminate\Http\Request;

class DailyCostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //DailyCostModelの全データを取得
        $dailyCosts = DailyCost::all();
        //取得したデータを返却する  
        return $dailyCosts;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DailyCostRequest $request)
    {
        // 新規のDailyCostModelインスタンスを作成
        $dailyCost = new DailyCost();

        // カラムの内容を$dailyCostに設定
        $dailyCost->shop_id = $request->get('shop_id');
        $dailyCost->cost_type = $request->get('cost_type');
        $dailyCost->amount = $request->get('amount');
        $dailyCost->is_fixed = $request->get('is_fixed');
        $dailyCost->date = $request->get('date');

        // データベースにデータを保存する
        $dailyCost->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
