@extends('layouts.app')
@section('content')
@include('partials.messages')
<div class="card shadow-lg">
  <div class="card-header"><h4 class="mb-0">Add Brand</h4></div>
  <div class="card-body">
    <form action="{{ route('brand.store') }}" method="POST">@csrf
      <div class="mb-3">
        <label class="form-label">Brand Name</label>
        <input type="text" name="name" value="{{ old('name') }}" class="form-control bg-dark" required>
      </div>
      <div class="text-end">
        <button class="btn btn-gradient">Save</button>
        <a href="{{ route('brand.index') }}" class="btn btn-outline-light">Cancel</a>
      </div>
    </form>
  </div>
</div>
@endsection
