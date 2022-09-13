@extends('layouts.admin')

@section('content')
    <div class="aiz-titlebar text-left mt-2 mb-3">
        <div class="row">
            <div class="col-md-6 align-items-center">
                <h1 class="h3">All Products</h1>
            </div>
            <div class="col-md-6 text-md-right mb-3">
                <a href="{{ route('product.create') }}" class="btn btn-circle btn-info">
                    <span>Add Product</span>
                </a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <table class="table aiz-table mb-0">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>image</th>
                            <th>Name</th>
                            <th>unit</th>
                            <th>price</th>
                            <th>stock</th>
                            <th>description</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $key => $product)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $product->image }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->unit }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->stock }}</td>
                                <td>{{ $product->description }}</td>
                                <td class="text-center d-flex ">
                                        <a class="btn btn-soft-primary btn-icon btn-circle btn-sm"
                                        href="{{ route('product.edit', $product->id) }}" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <form action="{{ route('product.destroy', $product->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-prmary"><i class="fas fa-trash"></i></button>
                                    </form>
                                    {{-- <a href="{{ route('category.destroy', $category->id) }}" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                        data-href="" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </a> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $products->links() }}
            </div>
        </div>
    </div>
@endsection
