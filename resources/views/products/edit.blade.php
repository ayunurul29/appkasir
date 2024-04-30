@extends('layouts.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        Edit product
                    </div>
                    <div class="float-end">
                        <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('products.update', $product->id) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="mb-3 row">
                            <label for="product_id" class="col-md-4 col-form-label text-md-end text-start">Id Produk</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('product_id') is-invalid @enderror"
                                    id="product_id" name="product_id" value="{{ $product->product_id }}">
                                @if ($errors->has('product_id'))
                                    <span class="text-danger">{{ $errors->first('product_id') }}</span>
                                @endif
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="nama_product" class="col-md-4 col-form-label text-md-end text-start">Nama
                                Product</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('nama_product') is-invalid @enderror"
                                    id="nama_product" name="nama_product" value="{{ $product->nama_product }}">
                                @if ($errors->has('nama_product'))
                                    <span class="text-danger">{{ $errors->first('nama_product') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="harga" class="col-md-4 col-form-label text-md-end text-start">Harga</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('harga') is-invalid @enderror"
                                    id="harga" name="harga" value="{{ $product->harga }}">
                                @if ($errors->has('harga'))
                                    <span class="text-danger">{{ $errors->first('harga') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="stok" class="col-md-4 col-form-label text-md-end text-start">Stok</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('stok') is-invalid @enderror"
                                    id="stok" name="stok" value="{{ $product->stok }}">
                                @if ($errors->has('stok'))
                                    <span class="text-danger">{{ $errors->first('stok') }}</span>
                                @endif
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
