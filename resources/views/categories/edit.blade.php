@extends('admin.layout.layout')

@section('title', 'Edit Category')

@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Category</h3>
            </div>
            <div class="card-body col-md-6">
                <form action="{{ route('categories.update', $category->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Category Name:</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Category</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
