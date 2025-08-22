@extends('layouts.master')
@section('content')
    <div class="container">
        <h1>Add New Product</h1>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="brand_id" class="form-label">Brand</label>
                <select name="brand_id" id="brand_id" class="form-control">
                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select name="category_id" id="category_id" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="size_id" class="form-label">Size</label>
                <select name="size_id" id="size_id" class="form-control">
                    @foreach ($sizes as $size)
                        <option value="{{ $size->id }}">{{ $size->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="colour_id" class="form-label">Colour</label>
                <select name="colour_id" id="colour_id" class="form-control">
                    @foreach ($colours as $colour)
                        <option value="{{ $colour->id }}">{{ $colour->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" name="price" id="price" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Quantity</label>
                <input type="number" name="quantity" id="quantity" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection
