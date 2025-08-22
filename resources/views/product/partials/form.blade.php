<div class="row g-3">
  <div class="col-md-6">
    <label class="form-label">Product Name</label>
    <input type="text" name="name" value="{{ old('name', $product->name ?? '') }}" class="form-control bg-dark" required>
  </div>
  <div class="col-md-6">
    <label class="form-label">Color</label>
    <input type="text" name="color" value="{{ old('color', $product->color ?? '') }}" class="form-control bg-dark">
  </div>
  <div class="col-12">
    <label class="form-label">Description</label>
    <textarea name="description" rows="3" class="form-control bg-dark">{{ old('description', $product->description ?? '') }}</textarea>
  </div>
  <div class="col-md-6">
    <label class="form-label">Brand</label>
    <select name="brand_id" class="form-select bg-dark" required>
      <option value="">-- Select Brand --</option>
      @foreach($brands as $brand)
        <option value="{{ $brand->id }}" {{ old('brand_id', $product->brand_id ?? '') == $brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
      @endforeach
    </select>
  </div>
  <div class="col-md-6">
    <label class="form-label">Category</label>
    <input type="text" name="category" value="{{ old('category', $product->category ?? '') }}" class="form-control bg-dark">
  </div>
  <div class="col-md-4">
    <label class="form-label">Size</label>
    <input type="text" name="size" value="{{ old('size', $product->size ?? '') }}" class="form-control bg-dark">
  </div>
  <div class="col-md-4">
    <label class="form-label">Price</label>
    <input type="number" name="price" step="0.01" value="{{ old('price', $product->price ?? '') }}" class="form-control bg-dark">
  </div>
  <div class="col-md-4">
    <label class="form-label">Season</label>
    <select name="season" class="form-select bg-dark">
      <option value="summer" {{ old('season', $product->season ?? '')=='summer' ? 'selected':'' }}>Summer</option>
      <option value="winter" {{ old('season', $product->season ?? '')=='winter' ? 'selected':'' }}>Winter</option>
    </select>
  </div>
  <div class="col-md-4">
    <label class="form-label">Gender</label>
    <select name="gender" class="form-select bg-dark">
      <option value="male" {{ old('gender', $product->gender ?? '')=='male' ? 'selected':'' }}>Men</option>
      <option value="female" {{ old('gender', $product->gender ?? '')=='female' ? 'selected':'' }}>Women</option>
    </select>
  </div>
</div>
<div class="text-end mt-3">
  <button class="btn btn-gradient">{{ $buttonText ?? 'Save' }}</button>
  <a href="{{ route('product.index') }}" class="btn btn-outline-light">Cancel</a>
</div>
