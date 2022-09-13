@extends('layouts.admin')

@section('content')
    <div class="aiz-titlebar text-left mt-2 mb-3">
        <div class="row">
            <div class="col-md-6 align-items-center">
                <h1 class="h3">All Category</h1>
            </div>
            <div class="col-md-6 text-md-right mb-3">
                <a href="{{ route('category.create') }}" class="btn btn-circle btn-info">
                    <span>Add Category</span>
                </a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <table class="table aiz-table mb-0">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $key => $category)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $category->name }}</td>
                                <td class="text-center d-flex ">
                                        <a class="btn btn-soft-primary btn-icon btn-circle btn-sm"
                                        href="{{ route('category.edit', $category->id) }}" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <form action="{{ route('category.destroy', $category->id) }}" method="POST" enctype="multipart/form-data">
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
                {{ $categories->links() }}
            </div>
        </div>
    </div>
@endsection
