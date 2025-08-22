@extends('layouts.master')
@section('content')
    <div class="container">
        <h1>Add New Size</h1>
        <form action="{{ route('sizes.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Size Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
            <a href="{{ route('sizes.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection
