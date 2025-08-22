@extends('layouts.master')
@section('content')
    <div class="container">
        <h1>Edit Size</h1>
        <form action="{{ route('sizes.update', $size->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Size Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $size->name }}" required>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('sizes.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection
