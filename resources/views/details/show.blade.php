@extends('layouts.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        detail Information
                    </div>
                    <div class="float-end">
                        <a href="{{ route('details.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                    </div>
                </div>
                <div class="card-body">

                    <div class="row">
                        <label for="detail_id" class="col-md-4 col-form-label text-md-end text-start"><strong> Id
                                detail:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $detail->detail_id }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="penjualan_id" class="col-md-4 col-form-label text-md-end text-start"><strong>Penjualan
                                Id:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $detail->penjualan->penjualan_id }}
                        </div>
                    </div>


                    <div class="row">
                        <label for="product_id" class="col-md-4 col-form-label text-md-end text-start"><strong>Produk
                                Id:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $detail->product->nama_product }}
                        </div>
                    </div>



                    <div class="row">
                        <label for="jumlah_product"
                            class="col-md-4 col-form-label text-md-end text-start"><strong>jumlah_product:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $detail->jumlah_product }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="subtotal"
                            class="col-md-4 col-form-label text-md-end text-start"><strong>subtotal:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $detail->subtotal }}
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </div>
@endsection
