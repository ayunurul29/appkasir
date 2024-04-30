<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('penjualans.index', [
            'penjualans' => Penjualan::latest()->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penjualans.create', [
            'title' => 'Tambah penjualan',
            'pelanggans' => Pelanggan::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'penjualan_id' => 'required',
            'tgl_penjualan' => 'required',
            'total_harga' => 'required',
            'pelanggan_id' => 'required',
        ]);

        Penjualan::create([
            'penjualan_id' => $request->penjualan_id,
            'tgl_penjualan' => $request->tgl_penjualan,
            'total_harga' => $request->total_harga,
            'pelanggan_id' => $request->pelanggan_id,
        ]);

        return redirect()->route('penjualans.index')
            ->withSuccess('New penjualan is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Penjualan $penjualan)
    {
        // Load related pelanggan data
        $penjualan->load('pelanggan');
        
        return view('penjualans.show', [
            'penjualan' => $penjualan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
   /**
 * Show the form for editing the specified resource.
 */
public function edit(Penjualan $penjualan)
{
    $pelanggans = Pelanggan::all();

    return view('penjualans.edit', [
        'penjualan' => $penjualan,
        'pelanggans' => $pelanggans,
    ]);
}

/**
 * Update the specified resource in storage.
 */
public function update(Request $request, Penjualan $penjualan)
{
    $request->validate([
        'penjualan_id' => 'required',
        'tgl_penjualan' => 'required',
        'total_harga' => 'required',
        'pelanggan_id' => 'required',
    ]);

    $penjualan->update([
        'penjualan_id' => $request->penjualan_id,
        'tgl_penjualan' => $request->tgl_penjualan,
        'total_harga' => $request->total_harga,
        'pelanggan_id' => $request->pelanggan_id,
    ]);

    return redirect()->route('penjualans.index')
        ->withSuccess('penjualan is updated successfully.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penjualan $penjualan)
    {
        $penjualan->delete();
        return redirect()->route('penjualans.index')
            ->withSuccess('penjualan is deleted successfully.');
    }
}
