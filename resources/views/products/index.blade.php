@extends('layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">Manage products</div>
        <div class="card-body">
            @can('create-product')
                <a href="{{ route('products.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add
                    New product</a>
            @endcan
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">S#</th>
                        <th scope="col">Id Produk</th>
                        <th scope="col"> Nama Produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col"> Stok</th>
                        <th scope="col" style="width: 250px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $product->product_id }}</td>
                            <td>{{ $product->nama_product }}</td>
                            <td>{{ $product->harga }}</td>
                            <td>{{ $product->stok }}</td>

                            <td>
                                <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-warning btn-sm"><i
                                            class="bi bi-eye"></i> Show</a>


                                    @can('edit-product')
                                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm"><i
                                                class="bi bi-pencil-square"></i> Edit</a>
                                    @endcan

                                    @can('delete-product')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Do you want to delete this product?');"><i
                                                class="bi bi-trash"></i> Delete</button>
                                    @endcan


                                </form>
                            </td>
                        </tr>
                    @empty
                        <td colspan="3">
                            <span class="text-danger">
                                <strong>No product Found!</strong>
                            </span>
                        </td>
                    @endforelse
                </tbody>
            </table>

            {{ $products->links() }}

        </div>
    </div>
@endsection
