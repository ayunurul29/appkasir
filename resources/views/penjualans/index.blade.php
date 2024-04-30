@extends('layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">Manage penjualans</div>
        <div class="card-body">
            @can('create-penjualan')
                <a href="{{ route('penjualans.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i>
                    Add
                    New penjualan</a>
            @endcan
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">S#</th>
                        <th scope="col">Id penjualan</th>
                        <th scope="col"> Tanggal penjualan</th>
                        <th scope="col">Total Harga</th>
                        <th scope="col"> Nama Pelanggan</th>
                        <th scope="col" style="width: 250px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($penjualans as $penjualan)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $penjualan->penjualan_id }}</td>
                            <td>{{ $penjualan->tgl_penjualan }}</td>
                            <td>{{ $penjualan->total_harga }}</td>
                            <td>{{ @$penjualan->pelanggan->nama_pelanggan }}</td>

                            <td>
                                <form action="{{ route('penjualans.destroy', $penjualan->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('penjualans.show', $penjualan->id) }}"
                                        class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>


                                    @can('edit-penjualan')
                                        <a href="{{ route('penjualans.edit', $penjualan->id) }}"
                                            class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                                    @endcan

                                    @can('delete-penjualan')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Do you want to delete this penjualan?');"><i
                                                class="bi bi-trash"></i> Delete</button>
                                    @endcan


                                </form>
                            </td>
                        </tr>
                    @empty
                        <td colspan="3">
                            <span class="text-danger">
                                <strong>No penjualan Found!</strong>
                            </span>
                        </td>
                    @endforelse
                </tbody>
            </table>

            {{ $penjualans->links() }}

        </div>
    </div>
@endsection
