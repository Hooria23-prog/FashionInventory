@extends('layouts.master')
@section('content')
    <div class="container">
        <h1>Add New Colour</h1>
        <form action="{{ route('colours.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Colour Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
            <a href="{{ route('colours.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection
