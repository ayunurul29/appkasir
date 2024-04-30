@extends('layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">Manage pelanggans</div>
        <div class="card-body">
            @can('create-pelanggan')
                <a href="{{ route('pelanggans.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i>
                    Add
                    New pelanggan</a>
            @endcan
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">S#</th>
                        <th scope="col">Id Pelanggan</th>
                        <th scope="col"> Nama Pelanggan</th>
                        <th scope="col">Alamat</th>
                        <th scope="col"> Nomor Telepon</th>
                        <th scope="col" style="width: 250px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pelanggans as $pelanggan)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $pelanggan->pelanggan_id }}</td>
                            <td>{{ $pelanggan->nama_pelanggan }}</td>
                            <td>{{ $pelanggan->alamat }}</td>
                            <td>{{ $pelanggan->nomor_telepon }}</td>

                            <td>
                                <form action="{{ route('pelanggans.destroy', $pelanggan->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('pelanggans.show', $pelanggan->id) }}"
                                        class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>


                                    @can('edit-pelanggan')
                                        <a href="{{ route('pelanggans.edit', $pelanggan->id) }}"
                                            class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                                    @endcan

                                    @can('delete-pelanggan')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Do you want to delete this pelanggan?');"><i
                                                class="bi bi-trash"></i> Delete</button>
                                    @endcan


                                </form>
                            </td>
                        </tr>
                    @empty
                        <td colspan="3">
                            <span class="text-danger">
                                <strong>No pelanggan Found!</strong>
                            </span>
                        </td>
                    @endforelse
                </tbody>
            </table>

            {{ $pelanggans->links() }}

        </div>
    </div>
@endsection
