<?php

namespace App\Http\Controllers;

use App\Models\Cost;
use Illuminate\Http\Request;

class CostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Costモデル情報を取得
        $costs = Cost::all();
        //取得したデータを返却する
        return $costs;
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
    public function store(Request $request)
    {
        // リクエストデータを取得
        $data = $request->all();
        // データを保存
        $cost = Cost::create($data);
        // 保存したデータを返却
        return $cost;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // 指定されたIDのデータを取得
        $cost = Cost::find($id);
        // 取得したデータを返却
        return $cost;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //　指定されたIDのデータを取得
        $cost = Cost::find($id);
        // 取得したデータを返却
        return $cost;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // リクエストデータを取得
        $data = $request->all();
        // 指定されたIDのデータを取得
        $cost = Cost::find($id);
        // データを更新
        $cost->update($data);
        // 更新したデータを返却
        return $cost;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //　指定されたIDのデータを取得
        $cost = Cost::find($id);
        // データを削除
        $cost->delete();
        // 削除したデータを返却
        return $cost;
    }
}
