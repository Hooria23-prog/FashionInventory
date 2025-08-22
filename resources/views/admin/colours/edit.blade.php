@extends('layouts.master')
@section('content')
    <div class="container">
        <h1>Edit Colour</h1>
        <form action="{{ route('colours.update', $colour->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Colour Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $colour->name }}" required>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('colours.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection
