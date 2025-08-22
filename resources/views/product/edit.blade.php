@extends('layouts.app')
@section('content')
@include('partials.messages')
<div class="card shadow-lg">
  <div class="card-header"><h4 class="mb-0">Edit Product</h4></div>
  <div class="card-body">
    <form action="{{ route('product.update', $product->id) }}" method="POST">@csrf @method('PUT')
      @include('product.partials.form', ['buttonText' => 'Update Product'])
    </form>
  </div>
</div>
@endsection
