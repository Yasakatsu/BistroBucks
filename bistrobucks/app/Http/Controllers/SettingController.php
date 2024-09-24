<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
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
        //
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
        $validated = $request->validate([
            'shop_id' => 'required|exists:shops,id',
            'standard_tax_rate' => 'required|numeric|min:0',
            'reduced_tax_rate' => 'required|numeric|min:0',
        ]);

        $settings = Setting::where('shop_id', auth()->user()->shop_id)->firstOrFail();
        $settings->update($validated);

        return response()->json(['message' => 'Settings updated successfully', 'settings' => $settings]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
