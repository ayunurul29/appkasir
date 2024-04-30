@extends('layouts.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        Edit pelanggan
                    </div>
                    <div class="float-end">
                        <a href="{{ route('pelanggans.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('pelanggans.update', $pelanggan->id) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="mb-3 row">
                            <label for="pelanggan_id" class="col-md-4 col-form-label text-md-end text-start">Id
                                Pelanggan</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('pelanggan_id') is-invalid @enderror"
                                    id="pelanggan_id" name="pelanggan_id" value="{{ $pelanggan->pelanggan_id }}">
                                @if ($errors->has('pelanggan_id'))
                                    <span class="text-danger">{{ $errors->first('pelanggan_id') }}</span>
                                @endif
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="nama_pelanggan" class="col-md-4 col-form-label text-md-end text-start">Nama
                                pelanggan</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('nama_pelanggan') is-invalid @enderror"
                                    id="nama_pelanggan" name="nama_pelanggan" value="{{ $pelanggan->nama_pelanggan }}">
                                @if ($errors->has('nama_pelanggan'))
                                    <span class="text-danger">{{ $errors->first('nama_pelanggan') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="alamat" class="col-md-4 col-form-label text-md-end text-start">Alamat</label>
                            <div class="col-md-6">
                                <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat"
                                    value="{{ $pelanggan->alamat }}"></textarea>
                                @if ($errors->has('alamat'))
                                    <span class="text-danger">{{ $errors->first('alamat') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="nomor_telepon" class="col-md-4 col-form-label text-md-end text-start">Nomor
                                Telepon</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('nomor_telepon') is-invalid @enderror"
                                    id="nomor_telepon" name="nomor_telepon" value="{{ $pelanggan->nomor_telepon }}">
                                @if ($errors->has('nomor_telepon'))
                                    <span class="text-danger">{{ $errors->first('nomor_telepon') }}</span>
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
