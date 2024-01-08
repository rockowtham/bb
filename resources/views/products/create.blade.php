@extends('admin.layout.layout')

@section('title', 'Add Products')


@section('content')
<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <!-- Add your product form here -->
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" id="addProductForm">
                @csrf
                <!-- Add form fields for each product attribute -->
            <div class="row">
                    <div class="col-md-6">
                        <!-- Left Column -->
                        <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="name">description:</label>
                <input type="text" name="description" class="form-control" required>
            </div>

            <!-- Add other fields for the left column... -->
        </div>

        <div class="col-md-6">
            <!-- Right Column -->
            <div class="form-group">
                <label for="name">sku:</label>
                <input type="text" name="sku" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="name">price:</label>
                <input type="number" name="price" class="form-control" required>
            </div>

            <!-- Add other fields for the right column... -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name">category:</label>
                <select name="category_id" class="form-control" required>
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="name">brand:</label>
                <select name="brand_id" class="form-control" required>
                    <option value="">Select Brand</option>
                    @foreach($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="name">weight:</label>
                <input type="number" name="weight" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="name">dimensions:</label>
                <input type="number" name="dimensions" class="form-control" required>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name">quantity_available:</label>
                <input type="number" name="quantity_available" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="images">Upload Images:</label>
                <input type="file" name="images[]" class="form-control" id="imageInput" multiple accept="image/*" style="display: none">
                <button type="button" class="btn btn-secondary" onclick="selectImages()">Upload Images</button>
            </div>
   
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="name">active:</label>
                <div class="form-check form-check-inline toggle-switch">
                    <input type="radio" name="active" id="active_yes" value="1" class="form-check-input" required>
                    <label class="form-check-label" for="active_yes" >Yes</label>
                </div>
                <div class="form-check form-check-inline toggle-switch">
                    <input type="radio" name="active" id="active_no" value="0" class="form-check-input" required>
                    <label class="form-check-label" for="active_no">No</label>
                </div>
            </div>
            <div class="form-group">
                <label for="name">Featured:</label>
                <div class="form-check form-check-inline toggle-switch">
                    <input type="radio" name="featured" id="featured_yes" value="1" class="form-check-input" required>
                    <label class="form-check-label" for="featured_yes" >Yes</label>
                </div>
                <div class="form-check form-check-inline toggle-switch">
                    <input type="radio" name="featured" id="featured_no" value="0" class="form-check-input" required>
                    <label class="form-check-label" for="featured_no">No</label>
                </div>
            </div>
            <div class="form-group">
            </div>
        </div>
        <div class="row">
                           <!-- Display Uploaded Images -->
    <div class="mt-4" id="uploadedImagesSection">
        <!-- Images will be displayed here -->
    </div>
        </div>
    </div>
               
        <button type="submit" class="btn btn-primary">Add Product</button>
            </form>
          <!-- JavaScript to Handle Image Upload -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    function selectImages() {
        // Trigger the file input click event
        document.getElementById('imageInput').click();
    }

    $('#imageInput').on('change', function () {
        // Display uploaded images before form submission
        displayUploadedImages(this.files);
    });

    function displayUploadedImages(files) {
        // Display the uploaded images
        var uploadedImagesSection = $('#uploadedImagesSection');
        uploadedImagesSection.html('<h5>Uploaded Images:</h5><div class="row">');

        for (var i = 0; i < files.length; i++) {
            var reader = new FileReader();
            reader.onload = function (e) {
                uploadedImagesSection.append('<div class="col-md-3 mb-3"><img src="' + e.target.result + '" alt="Uploaded Image" class="img-thumbnail"></div>');
            };
            reader.readAsDataURL(files[i]);
        }

        uploadedImagesSection.append('</div>');
    }

    $('#addProductForm').submit(function (event) {
        event.preventDefault();

        // Create FormData object to send images via AJAX
        var formData = new FormData(this);

        // Send AJAX request
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                if (response.success) {
            // Display success message on the page
            alert(response.message);

            // Redirect to the specified URL
            window.location.href = response.redirect_url;
        } else {
            // Handle errors or display error messages
            console.error(response.error);
        }
            },
            error: function (error) {
                // Handle error response
                console.error(error);
            }
        });
    });
</script>
        </div>
    </div>
</div>
@stop
{{-- @endsection --}}
