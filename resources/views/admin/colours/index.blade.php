@extends('layouts.master')
@section('content')
    <div class="container">
        <h1>Colours List</h1>
        <a href="{{ route('colours.create') }}" class="btn btn-primary mb-3">Add New Colour</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($colours as $colour)
                    <tr>
                        <td>{{ $colour->id }}</td>
                        <td>{{ $colour->name }}</td>
                        <td>
                            <a href="{{ route('colours.edit', $colour->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('colours.destroy', $colour->id) }}" method="POST"
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
