@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12 pl-5">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3> Edit Category</h3>
                    <a href="{{ route('category.index')}}" class="btn btn-primary">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('category.update', $category->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col mb-3">
                            <label class="required" for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ $category->name }}">
                        </div>
                        <div class="col text-right">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
