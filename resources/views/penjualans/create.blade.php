@extends('layouts.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        Add New penjualan
                    </div>
                    <div class="float-end">
                        <a href="{{ route('penjualans.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('penjualans.store') }}" method="post">
                        @csrf

                        <div class="mb-3 row">
                            <label for="penjualan_id" class="col-md-4 col-form-label text-md-end text-start">Id
                                Penjualan</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('penjualan_id') is-invalid @enderror"
                                    id="penjualan_id" name="penjualan_id" value="{{ old('penjualan_id') }}">
                                @error('penjualan_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="tgl_penjualan" class="col-md-4 col-form-label text-md-end text-start">Tanggal
                                penjualan</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control @error('tgl_penjualan') is-invalid @enderror"
                                    id="tgl_penjualan" name="tgl_penjualan" value="{{ old('tgl_penjualan') }}">
                                @error('tgl_penjualan')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="total_harga" class="col-md-4 col-form-label text-md-end text-start">Total
                                Harga</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('total_harga') is-invalid @enderror"
                                    id="total_harga" name="total_harga" value="{{ old('total_harga') }}">
                                @error('total_harga')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="pelanggan_id"
                                class="col-md-4 col-form-label text-md-end text-start">Pelanggan</label>
                            <div class="col-md-6">
                                <select class="form-control @error('pelanggan_id') is-invalid @enderror" id="pelanggan_id"
                                    name="pelanggan_id">
                                    <option value="">Pilih Pelanggan</option>
                                    @foreach ($pelanggans as $pelanggan)
                                        <option value="{{ $pelanggan->id }}">{{ $pelanggan->pelanggan_id }}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Add penjualan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
