<?php

namespace App\Http\Controllers;

use App\Models\DailyCost;
use Illuminate\Http\Request;

class DailyCostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {}

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
        $validated = $request->validate([
            'shop_id' => 'required|exists:shops,id',
            'amount' => 'required|numeric|min:0',
            'is_fixed' => 'required|boolean',
        ]);

        $validated['shop_id'] = auth()->user()->shop_id;
        DailyCost::create($validated);

        return response()->json(['message' => 'コスト情報の作成が成功しました']);
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
        $cost = DailyCost::where('id', $id)->where('shop_id', auth()->user()->shop_id)->firstOrFail();

        $validated = $request->validate([
            'shop_id' => 'required|exists:shops,id',
            'amount' => 'required|numeric|min:0',
            'is_fixed' => 'required|boolean',
        ]);

        $cost->update($validated);

        return response()->json(['message' => 'コスト情報の更新が成功しました', 'cost' => $cost]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
