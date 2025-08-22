@extends('layouts.master')
@section('content')
    <div class="container">
        <h1>Brands List</h1>
        <a href="{{ route('brands.create') }}" class="btn btn-primary mb-3">Add New Brand</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($brands as $brand)
                    <tr>
                        <td>{{ $brand->id }}</td>
                        <td>{{ $brand->name }}</td>
                        <td>
                            <a href="{{ route('brands.edit', $brand->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('brands.destroy', $brand->id) }}" method="POST"
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
