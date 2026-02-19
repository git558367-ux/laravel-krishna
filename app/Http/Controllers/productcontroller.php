<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Show All Products
    public function index()
    {
        $products = Product::all();
        return view('admin.products.product-list', compact('products'));
    }

    // Show add form
    public function create()
    {
        return view('admin.products.create');
    }

    // Insert
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'price' => 'required|numeric',
        'percentage' => 'required|integer',
    ]);

    $imageName = null;

    if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);
    }

    Product::create([
        'name' => $request->name,
        'image' => $imageName,
        'price' => $request->price,
        'percentage' => $request->percentage,
        'quantity' => $request->quantity,
        'rating' => $request->rating,
    ]);

    return redirect()->route('products.index')->with('success', 'Product added successfully!');
}

    // Show edit form
    public function edit($id)
    {
        $products = Product::findOrFail($id);
        return view('admin.products.edit', compact('products'));
    }

    // Update
    public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);

    $imageName = $product->image;

    if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);
    }

    $product->update([
        'name' => $request->name,
        'image' => $imageName,
        'price' => $request->price,
        'percentage' => $request->percentage,
        'quantity' => $request->quantity,
        'rating' => $request->rating,
    ]);

    return redirect()->route('products.index')->with('success', 'Product updated!');
}

    // Delete
    public function delete($id)
    {
        Product::find($id)->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted!');
    }

    public function allproducts(){
        $products=Product::latest()->get();
        return view('all-product', compact('products'));
    }
    public function detail($id)
    {
        $product = Product::findOrFail($id);
        return view('product-detail', compact('product'));
    }
    
}
