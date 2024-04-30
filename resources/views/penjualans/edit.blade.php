@extends('layouts.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        Edit penjualan
                    </div>
                    <div class="float-end">
                        <a href="{{ route('penjualans.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('penjualans.update', $penjualan->id) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="mb-3 row">
                            <label for="penjualan_id" class="col-md-4 col-form-label text-md-end text-start">Id
                                Penjualan</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('penjualan_id') is-invalid @enderror"
                                    id="penjualan_id" name="penjualan_id" value="{{ $penjualan->penjualan_id }}">
                                @if ($errors->has('penjualan_id'))
                                    <span class="text-danger">{{ $errors->first('penjualan_id') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="tgl_penjualan" class="col-md-4 col-form-label text-md-end text-start">Tanggal
                                Penjualan</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('tgl_penjualan') is-invalid @enderror"
                                    id="tgl_penjualan" name="tgl_penjualan" value="{{ $penjualan->tgl_penjualan }}">
                                @if ($errors->has('tgl_penjualan'))
                                    <span class="text-danger">{{ $errors->first('tgl_penjualan') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="total_harga" class="col-md-4 col-form-label text-md-end text-start">Total
                                Harga</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('total_harga') is-invalid @enderror"
                                    id="total_harga" name="total_harga" value="{{ $penjualan->total_harga }}">
                                @if ($errors->has('total_harga'))
                                    <span class="text-danger">{{ $errors->first('total_harga') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="pelanggan_id" class="col-md-4 col-form-label text-md-end text-start">Pelanggan
                                Id</label>
                            <div class="col-md-6">
                                <select name="pelanggan_id" id="pelanggan_id" class="form-control">
                                    <option value="">Pilih pelanggan</option>
                                    @foreach ($pelanggans as $pelanggan)
                                        <option value="{{ $pelanggan->id }}"
                                            {{ $pelanggan->id == $penjualan->pelanggan_id ? 'selected' : '' }}>
                                            {{ $pelanggan->nama_pelanggan }}</option>
                                    @endforeach
                                </select>
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
