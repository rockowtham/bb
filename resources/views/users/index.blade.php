@extends('admin.layout.layout')

@section('title', 'Users')

@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">User Listing</h3>
            </div>
            <div class="card-body">
                <!-- Display user list table -->
                @if($users->count() > 0)
                    <table class="table">
                        <!-- Table Header -->
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <!-- Table Body -->
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('users.destroy', $user->id) }}" method="post" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>No users found.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
