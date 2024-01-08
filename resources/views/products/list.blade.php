@extends('admin.layout.layout')

@section('title', 'List Products')

@section('content')
<div class="content-wrapper">
    <h1>Product Listing</h1>

    <div class="mb-3 d-flex justify-content-end">
        <a href="{{ route('products.create') }}" class="btn btn-success mr-2">Add Product</a>
        <button id="bulkUploadButton" class="btn btn-primary">Bulk Upload</button>
    </div>

    <form action="{{ route('products.index') }}" method="GET">
        <div class="input-group input-group-sm mb-3" style="max-width: 500px;"> <!-- Set max-width to reduce horizontal width -->
            <input type="text" class="form-control form-control-sm" placeholder="Search products" name="query" value="{{ request('query') }}">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Category</th>
                <th>Available Stock</th>
                <th>Featured Product</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->quantity_available }}</td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="featuredToggle{{ $product->id }}" data-product-id="{{ $product->id }}" {{ $product->featured ? 'checked' : '' }}>
                            <label class="form-check-label" for="featuredToggle{{ $product->id }}"></label>
                        </div>
                    </td>
                    <td>
                        {{-- <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">
                            <i class="fas fa-eye"></i> View
                        </a> --}}
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
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

   {{ $products->appends(['query' => request('query')])->links() }}

</div>

<style>
    /* Custom CSS */
    .form-check-input:checked {
        background-color: #28a745; /* Green color for checked state */
        border-color: #28a745;
    }
</style>

<!-- Add this to include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        $('input[type="checkbox"]').on('change', function () {
            var productId = $(this).data('product-id');
            var isFeatured = $(this).prop('checked');
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            // Make an Ajax request to update the featured status
            $.ajax({
                url: '/update-featured-status/' + productId,
                type: 'POST',
                data: { isFeatured: isFeatured ? 1 : 0,
                    _token: csrfToken // Include the CSRF token
                },
                success: function (response) {
                    // Handle success if needed
                    showMessage('success', response.success);
                    console.log(response);
                },
                error: function (error) {
                    // Handle error if needed
                    console.error(error);
                }
            });
        });
    });

    function showMessage(type, message) {
        // You can use a library like Toastr or implement your own notification logic
        // For example, using Toastr:
        toastr[type](message);
    }
</script>
@stop
