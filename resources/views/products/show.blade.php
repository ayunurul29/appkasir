@extends('layouts.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        product Information
                    </div>
                    <div class="float-end">
                        <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                    </div>
                </div>
                <div class="card-body">

                    <div class="row">
                        <label for="product_id" class="col-md-4 col-form-label text-md-end text-start"><strong> Id
                                Product:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->product_id }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="nama_product" class="col-md-4 col-form-label text-md-end text-start"><strong>Nama
                                Product:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->nama_product }}
                        </div>
                    </div>


                    <div class="row">
                        <label for="nama"
                            class="col-md-4 col-form-label text-md-end text-start"><strong>harga:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->harga }}
                        </div>
                    </div>



                    <div class="row">
                        <label for="stok"
                            class="col-md-4 col-form-label text-md-end text-start"><strong>stok:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->stok }}
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
