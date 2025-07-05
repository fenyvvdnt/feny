<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'top_notes' => 'nullable|string',
            'middle_notes' => 'nullable|string',
            'base_notes' => 'nullable|string',
            'is_active' => 'required|in:0,1',
        ]);

        $imagePath = $request->file('image')->store('products', 'public');

        $notes = [];
        if ($request->top_notes) $notes['top'] = $request->top_notes;
        if ($request->middle_notes) $notes['middle'] = $request->middle_notes;
        if ($request->base_notes) $notes['base'] = $request->base_notes;

        Product::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'price' => $request->price,
            'image' => $imagePath,
            'notes' => $notes,
            'is_active' => $request->is_active,
        ]);

        return redirect()->route('admin.product.index')->with('success', 'Product berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'top_notes' => 'nullable|string',
            'middle_notes' => 'nullable|string',
            'base_notes' => 'nullable|string',
            'is_active' => 'required|in:0,1',
        ]);

        $data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'price' => $request->price,
            'is_active' => $request->is_active,
        ];

        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        $notes = [];
        if ($request->top_notes) $notes['top'] = $request->top_notes;
        if ($request->middle_notes) $notes['middle'] = $request->middle_notes;
        if ($request->base_notes) $notes['base'] = $request->base_notes;
        $data['notes'] = $notes;

        $product->update($data);

        return redirect()->route('admin.product.index')->with('success', 'Product berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }
        $product->delete();

        return redirect()->route('admin.product.index')->with('success', 'Product berhasil dihapus.');
    }
}
