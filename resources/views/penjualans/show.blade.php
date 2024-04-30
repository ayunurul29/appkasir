@extends('layouts.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        penjualan Information
                    </div>
                    <div class="float-end">
                        <a href="{{ route('penjualans.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                    </div>
                </div>
                <div class="card-body">

                    <div class="row">
                        <label for="penjualan_id" class="col-md-4 col-form-label text-md-end text-start"><strong> Id
                                penjualan:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $penjualan->penjualan_id }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="tgl_penjualan" class="col-md-4 col-form-label text-md-end text-start"><strong>Tanggal
                                penjualan:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $penjualan->tgl_penjualan }}
                        </div>
                    </div>


                    <div class="row">
                        <label for="total_harga"
                            class="col-md-4 col-form-label text-md-end text-start"><strong>total_harga:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $penjualan->total_harga }}
                        </div>
                    </div>



                    <div class="row">
                        <label for="pelanggan_id"
                            class="col-md-4 col-form-label text-md-end text-start"><strong>pelanggan_id:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $penjualan->pelanggan_id }}
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
