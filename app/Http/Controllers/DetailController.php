<?php

namespace App\Http\Controllers;
use App\Models\Penjualan;
use App\Models\Product;
use App\Models\Detail;
use Illuminate\Http\Request;
use PDF;


class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('details.index', [
            'details' => Detail::latest()->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('details.create', [
            'title' => 'Tambah detail',
            'penjualans' => Penjualan::all(),
            'products' => Product::all(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'detail_id' => 'required',
            'penjualan_id' => 'required',
            'product_id' => 'required',
            'jumlah_product' => 'required',
            'subtotal' => 'required',
                ]);

           Detail::create([
             'detail_id' => $request->detail_id,
             'penjualan_id' => $request->penjualan_id,
             'product_id' => $request->product_id,
             'jumlah_product' => $request->jumlah_product,
             'subtotal' => $request->subtotal,

              ]);
          
        return redirect()->route('details.index')
                ->withSuccess('New Detail is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Detail $detail)
    {
        return view('details.show', [
            'detail' => $detail
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */

        public function edit(Detail $detail)
        {
            $penjualans = Penjualan::all();
            $products = Product::all();
        
            return view('details.edit', [
                'detail' => $detail,
                'penjualans' => $penjualans,
                'products' => $products,
            ]);
        }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Detail $detail)
    {
        $request->validate([
            'detail_id' => 'required',
            'penjualan_id' => 'required',
            'product_id' => 'required',
            'jumlah_product' => 'required',
            'subtotal' => 'required',
         
                ]);

            $detail->update([
                'detail_id' => $request->detail_id,
             'penjualan_id' => $request->penjualan_id,
             'product_id' => $request->product_id,
             'jumlah_product' => $request->jumlah_product,
             'subtotal' => $request->subtotal,

              ]);
           
        return redirect()->route('details.index')
                ->withSuccess('New detail is added successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Detail $detail)
    {
        
        $detail->delete();
        return redirect()->route('details.index')
                ->withSuccess('detail is deleted successfully.');
    }
    



    public function exportPDF()
    {
        $details = Detail::all();
        $pdf = PDF::loadView('details.pdf', compact('details'));
        return $pdf->download('details.pdf');
    }
    
    
}
