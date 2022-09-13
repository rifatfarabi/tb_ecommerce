@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12 pl-5">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3> Add Category</h3>
                    <a href="{{ route('category.index')}}" class="btn btn-primary">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('category.index')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col mb-3">
                            <label class="required" for="image">Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                        <div class="col mb-3">
                            <label class="required" for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="col mb-3">
                            <label class="required" for="unit">Unit</label>
                            <input type="text" class="form-control" id="unit" name="unit">
                        </div>
                        <div class="col mb-3">
                            <label class="required" for="price">Price</label>
                            <input type="text" class="form-control" id="price" name="price">
                        </div>
                        <div class="col mb-3">
                            <label class="required" for="stock">Stock</label>
                            <input type="text" class="form-control" id="stock" name="stock">
                        </div>
                        <div class="col mb-3">
                            <label class="required" for="description">Description</label>
                            <input type="text" class="form-control" id="description" name="description">
                        </div>
                        <div class="col text-right">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
