@extends('layouts.master')
@section('content')
    <div class="container">
        <h1>Sizes List</h1>
        <a href="{{ route('sizes.create') }}" class="btn btn-primary mb-3">Add New Size</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sizes as $size)
                    <tr>
                        <td>{{ $size->id }}</td>
                        <td>{{ $size->name }}</td>
                        <td>
                            <a href="{{ route('sizes.edit', $size->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('sizes.destroy', $size->id) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
