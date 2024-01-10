@extends('admin.layout.layout')

@section('title', 'Create Category')

@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="card" >
            <div class="card-header">
                <h3 class="card-title">Add Category</h3>
            </div>
            <div class="card-body col-md-6">
                <form action="{{ route('categories.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Category Name:</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Category</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
