@extends('admin.layout.layout')

@section('title', 'Categories')

{{-- @section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Categories</h3>
                <div class="card-tools">
                    <a href="{{ route('categories.create') }}" class="btn btn-primary">Add Category</a>
                </div>
            </div>
            <div class="card-body">
                <!-- Display the category list here -->
            </div>
        </div>
    </div>
</div>
@endsection --}}
@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Categories</h3>
                <div class="card-tools">
                    <a href="{{ route('categories.create') }}" class="btn btn-primary">Add Category</a>
                </div>
            </div>
            <div class="card-body">
                @if($categories->count() > 0)
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
                                        <!-- You can add a delete button if you implement delete functionality -->
                                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product?')">
                                                <i class="fas fa-trash-alt"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $categories->links() }}
                @else
                    <p>No categories found.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection