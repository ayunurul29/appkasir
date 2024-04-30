<?php

namespace App\Http\Controllers;
use App\Models\Penjualan;
use App\Models\Product;
use App\Models\Pelanggan;
use App\Models\Detail;
use App\Models\Dashboard;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $penjualan = Penjualan::count();
        $pelanggan = Pelanggan::count();
        $product = Product::count();
        $detail = Detail::count();

        return view('dashboard.dashboard', [
            'title' => 'Dashboard',
            'penjualan' => $penjualan,
            'pelanggan' => $pelanggan,
            'product' => $product,
            'detail' => $detail,
        ]);
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
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
