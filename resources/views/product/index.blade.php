@extends('layouts.app')
@section('content')
@include('partials.messages')
<div class="card shadow-lg">
  <div class="card-header d-flex justify-content-between align-items-center">
    <h4 class="mb-0">Products</h4>
    <a href="{{ route('product.create') }}" class="btn btn-gradient btn-sm">
      <i class="fa-solid fa-plus me-1"></i> Add Product
    </a>
  </div>
  <div class="card-body">
    @if($products->count())
      <div class="table-responsive">
        <table class="table table-dark table-hover table-striped align-middle text-center">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Brand</th>
              <th>Color</th>
              <th>Size</th>
              <th>Price</th>
              <th>Season</th>
              <th>Gender</th>
              <th width="150">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($products as $i => $product)
              <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->brand->name ?? 'N/A' }}</td>
                <td><span class="badge" style="background: {{ strtolower($product->color ?? '#555') }}; color:#fff;">{{ ucfirst($product->color ?? 'N/A') }}</span></td>
                <td><span class="badge bg-info">{{ $product->size }}</span></td>
                <td><span class="badge bg-warning">Rs. {{ number_format($product->price ?? 0) }}</span></td>
                <td><span class="badge {{ ($product->season ?? '')==='summer' ? 'bg-success' : 'bg-primary' }}">{{ ucfirst($product->season ?? 'n/a') }}</span></td>
                <td><span class="badge {{ ($product->gender ?? '')==='male' ? 'bg-info' : 'bg-danger' }}">{{ ucfirst($product->gender ?? 'n/a') }}</span></td>
                <td>
                  <a href="{{ route('product.edit',$product->id) }}" class="btn btn-sm btn-outline-light"><i class="fa-solid fa-pen"></i></a>
                  <form action="{{ route('product.destroy',$product->id) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Delete this product?')"><i class="fa-solid fa-trash"></i></button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    @else
      <div class="alert alert-info mb-0">No products found.</div>
    @endif
  </div>
</div>
@endsection
