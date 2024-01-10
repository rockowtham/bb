@extends('admin.layout.layout')

@section('title', 'Edit Users')

@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit User</h3>
            </div>
            <div class="card-body">
                <!-- User edit form -->
                <form action="{{ route('users.update', $user->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
                    </div>
                    <!-- Add other fields as needed -->
                    <button type="submit" class="btn btn-primary">Update User</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
