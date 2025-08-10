<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::with('brand')->get();
        return view('product.index', ['products' => $products]);
    }

    public function create()
    {
        $brands = Brand::all();
        return view('product.create', compact('brands'));
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'qty' => 'required|numeric|min:1',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string|max:1000',
            'color' => 'required|string|max:100',
            'brand_id' => 'required|exists:brands,id',
            'category' => 'required|string|max:100',
            'size' => 'required|string|max:10',
            'suit_type' => 'required|in:stitched,unstitched',
            'gender' => 'required|in:men,women',
            'season' => 'required|in:summer,winter',
        ]);

        Product::create($data);

        return redirect()->route('product.index')->with('success', 'Product created successfully!');
    }

    public function edit(Product $product)
    {
        $brands = Brand::all();
        return view('product.edit', compact('product', 'brands'));
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'qty' => 'required|numeric|min:1',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string|max:1000',
            'color' => 'required|string|max:100',
            'brand_id' => 'required|exists:brands,id',
            'category' => 'required|string|max:100',
            'size' => 'required|string|max:10',
            'suit_type' => 'required|in:stitched,unstitched',
            'gender' => 'required|in:men,women',
            'season' => 'required|in:summer,winter',
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
