@extends('layouts.app')
@section('content')
@include('partials.messages')
<div class="card shadow-lg">
  <div class="card-header"><h4 class="mb-0">Add Product</h4></div>
  <div class="card-body">
    <form action="{{ route('product.store') }}" method="POST">@csrf
      @include('product.partials.form', ['buttonText' => 'Add Product'])
    </form>
  </div>
</div>
@endsection
