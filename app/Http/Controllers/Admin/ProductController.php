<?php

namespace App\Http\Controllers\Admin;

use App\Models\Size;
use App\Models\Brand;
use App\Models\Colour;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('brand')->latest()->get();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $brands = Brand::orderBy('name')->get();
        $categories = Category::orderBy('name')->get();
        $sizes = Size::orderBy('name')->get();
        $colours = Colour::orderBy('name')->get();

        return view('admin.products.create', compact('brands', 'categories', 'sizes', 'colours'));
    }

    function generateUniqueSku($length = 10)
    {
        do {
            $sku = strtoupper(Str::random($length));
        } while (Product::where('sku', $sku)->exists());

        return $sku;
    }


    public function store(Request $request)
    {

        // $sku = 'PRD-' . strtoupper(Str::random(6)) . '-' . time();
        $sku = $this->generateUniqueSku();

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'brand_id' => 'required|exists:brands,id',
            'color' => 'nullable|string|max:50',
            'category_id' => 'nullable|exists:categories,id',
            'size_id' => 'nullable|exists:sizes,id',
            'price' => 'nullable|numeric|min:0',
            'season' => 'nullable|in:summer,winter',
            'gender' => 'nullable|in:male,female',
            'quantity' => 'nullable|integer|min:0',
        ]);

        $data['sku'] = $sku;
        Product::create($data);
        return redirect()->route('products.index')->with('success', 'Product added successfully!');
    }

    public function edit(Product $product)
    {
        $brands = Brand::orderBy('name')->get();
        return view('admin.products.edit', compact('product', 'brands'));
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'brand_id' => 'required|exists:brands,id',
            'color' => 'nullable|string|max:50',
            'category' => 'nullable|string|max:100',
            'size' => 'nullable|string|max:50',
            'price' => 'nullable|numeric|min:0',
            'season' => 'nullable|in:summer,winter',
            'gender' => 'nullable|in:male,female',
        ]);

        $product->update($data);
        return redirect()->route('product.index')->with('success', 'Product updated successfully!');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Product deleted successfully!');
    }
}
