<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $validated = $request->validate([
            'shop_id' => 'required|exists:shops,id',
            'amount' => 'required|numeric|min:0',
            'tax_amount' => 'required|numeric|min:0',
        ]);

        $validated['shop_id'] = auth()->user()->shop_id;
        Sale::create($validated);

        return response()->json(['message' => '売上情報の作成が成功しました']);
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
        $sale = Sale::where('id', $id)->where('shop_id', auth()->user()->shop_id)->firstOrFail();

        $validated = $request->validate([
            'shop_id' => 'required|exists:shops,id',
            'amount' => 'required|numeric|min:0',
            'tax_amount' => 'required|numeric|min:0',
        ]);

        $sale->update($validated);

        return response()->json(['message' => '売上情報の更新が完了しました', 'sale' => $sale]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sale = Sale::findOrFail($id);
        $sale->delete();

        return response()->json(['message' => '売上情報の削除が完了しました']);
    }
}
