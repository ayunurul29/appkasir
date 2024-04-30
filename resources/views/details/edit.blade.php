@extends('layouts.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        Edit detail
                    </div>
                    <div class="float-end">
                        <a href="{{ route('details.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('details.update', $detail->id) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="mb-3 row">
                            <label for="detail_id" class="col-md-4 col-form-label text-md-end text-start">Detail Id</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('detail_id') is-invalid @enderror"
                                    id="detail_id" name="detail_id" value="{{ $detail->detail_id }}">
                                @if ($errors->has('detail_id'))
                                    <span class="text-danger">{{ $errors->first('detail_id') }}</span>
                                @endif
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="penjualan_id" class="col-md-4 col-form-label text-md-end text-start">Penjualan Id
                            </label>
                            <div class="col-md-6">
                                <select name="penjualan_id" id="penjualan_id" class="form-control">
                                    <option value="">Pilih penjualan</option>
                                    @foreach ($penjualans as $penjualan)
                                        <option value="{{ $penjualan->id }}"
                                            {{ $penjualan->id == $penjualan->penjualan_id ? 'selected' : '' }}>
                                            {{ $penjualan->penjualan_id }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="product_id"
                                class="col-md-4 col-form-label text-md-end text-start">product_id</label>
                            <div class="col-md-6">
                                <select name="product_id" id="product_id" class="form-control">
                                    <option value="">Pilih product</option>
                                    @foreach ($products as $product)
                                        <option value="{{ $product->id }}"
                                            {{ $product->id == $penjualan->product_id ? 'selected' : '' }}>
                                            {{ $product->nama_product }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="jumlah_product"
                                class="col-md-4 col-form-label text-md-end text-start">jumlah_product</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('jumlah_product') is-invalid @enderror"
                                    id="jumlah_product" name="jumlah_product" value="{{ $detail->jumlah_product }}">
                                @if ($errors->has('jumlah_product'))
                                    <span class="text-danger">{{ $errors->first('jumlah_product') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="subtotal" class="col-md-4 col-form-label text-md-end text-start">subtotal</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('subtotal') is-invalid @enderror"
                                    id="subtotal" name="subtotal" value="{{ $detail->subtotal }}">
                                @if ($errors->has('subtotal'))
                                    <span class="text-danger">{{ $errors->first('subtotal') }}</span>
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
