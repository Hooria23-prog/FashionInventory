@extends('layouts.app')
@section('content')
@include('partials.messages')
<div class="card shadow-lg">
  <div class="card-header d-flex justify-content-between align-items-center">
    <h4 class="mb-0">Brands</h4>
    <a href="{{ route('brand.create') }}" class="btn btn-gradient btn-sm">
      <i class="fa-solid fa-plus me-1"></i> Add Brand
    </a>
  </div>
  <div class="card-body">
    @if($brands->count())
      <div class="table-responsive">
        <table class="table table-dark table-hover table-striped align-middle text-center">
          <thead><tr><th>#</th><th>Name</th><th width="150">Actions</th></tr></thead>
          <tbody>
            @foreach($brands as $i => $brand)
              <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $brand->name }}</td>
                <td>
                  <a href="{{ route('brand.edit',$brand->id) }}" class="btn btn-sm btn-outline-light"><i class="fa-solid fa-pen"></i></a>
                  <form action="{{ route('brand.destroy',$brand->id) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Delete this brand?')"><i class="fa-solid fa-trash"></i></button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    @else
      <div class="alert alert-info mb-0">No brands found.</div>
    @endif
  </div>
</div>
@endsection
