@extends('layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">Manage details</div>
        <div class="card-body">
            @can('create-detail')
                <a href="{{ url('detail-pdf') }}" class="btn btn-danger btn-flat">
                    <i class="fa fa-file-pdf"></i> Export PDF
                </a>
            @endcan
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">S#</th>
                        <th scope="col">Detail Id</th>
                        <th scope="col">Penjualan Id</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Jumlah Produk</th>
                        <th scope="col">Subtotal</th>
                        <th scope="col" style="width: 250px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($details as $detail)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $detail->detail_id }}</td>
                            <td>{{ @$detail->penjualan->penjualan_id }}</td>
                            <td>{{ @$detail->product->nama_product }}</td>
                            <td>{{ $detail->jumlah_product }}</td>
                            <td>{{ $detail->subtotal }}</td>
                            <td>
                                <form action="{{ route('details.destroy', $detail->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('details.show', $detail->id) }}" class="btn btn-warning btn-sm"><i
                                            class="bi bi-eye"></i> Show</a>
                                    @can('edit-detail')
                                        <a href="{{ route('details.edit', $detail->id) }}" class="btn btn-primary btn-sm"><i
                                                class="bi bi-pencil-square"></i> Edit</a>
                                    @endcan
                                    @can('delete-detail')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Do you want to delete this detail?');"><i
                                                class="bi bi-trash"></i> Delete</button>
                                    @endcan
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">
                                <span class="text-danger">
                                    <strong>No detail Found!</strong>
                                </span>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $details->links() }}
        </div>
    </div>
@endsection
