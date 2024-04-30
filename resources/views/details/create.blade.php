@extends('layouts.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        Add New detail
                    </div>
                    <div class="float-end">
                        <a href="{{ route('details.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('details.store') }}" method="post">
                        @csrf

                        <div class="mb-3 row">
                            <label for="detail_id" class="col-md-4 col-form-label text-md-end text-start">Id</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('detail_id') is-invalid @enderror"
                                    id="detail_id" name="detail_id" value="{{ old('detail_id') }}">
                                @if ($errors->has('detail_id'))
                                    <span class="text-danger">{{ $errors->first('detail_id') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="penjualan_id"
                                class="col-md-4 col-form-label text-md-end text-start">Penjualan</label>
                            <div class="col-md-6">
                                <select class="form-control @error('penjualan_id') is-invalid @enderror" id="penjualan_id"
                                    name="penjualan_id">
                                    <option value="">Pilih penjualan</option>
                                    @foreach ($penjualans as $penjualan)
                                        <option value="{{ $penjualan->id }}">{{ $penjualan->penjualan_id }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('penjualan_id'))
                                    <span class="text-danger">{{ $errors->first('penjualan_id') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="product_id" class="col-md-4 col-form-label text-md-end text-start">Id
                                Product</label>
                            <div class="col-md-6">
                                <select class="form-control @error('product_id') is-invalid @enderror" id="product_id"
                                    name="product_id">
                                    <option value="">Pilih product</option>
                                    @foreach ($products as $product)
                                        <option value="{{ $product->id }}">{{ $product->id }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('product_id'))
                                    <span class="text-danger">{{ $errors->first('product_id') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="jumlah_product" class="col-md-4 col-form-label text-md-end text-start">Jumlah
                                Product</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('jumlah_product') is-invalid @enderror"
                                    id="jumlah_product" name="jumlah_product" value="{{ old('jumlah_product') }}">
                                @if ($errors->has('jumlah_product'))
                                    <span class="text-danger">{{ $errors->first('jumlah_product') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="subtotal" class="col-md-4 col-form-label text-md-end text-start">Subtotal</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('subtotal') is-invalid @enderror"
                                    id="subtotal" name="subtotal" value="{{ old('subtotal') }}">
                                @if ($errors->has('subtotal'))
                                    <span class="text-danger">{{ $errors->first('subtotal') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Add detail">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
