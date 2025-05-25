<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get(); // ORM
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all(); // ORM
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required',
            'image' => 'nullable|image|max:2048'
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $imageName); // Helper
        }

        DB::insert("INSERT INTO products (name, description, price, category_id, image, created_at, updated_at) VALUES (?, ?, ?, ?, ?, NOW(), NOW())", [
            $request->name,
            $request->description,
            $request->price,
            $request->category_id,
            $imageName
        ]); // Raw Query

        return redirect()->route('products.index')->with('success', 'Produk make up berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id); // ORM
        $categories = Category::all(); // ORM
        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required',
            'image' => 'nullable|image|max:2048'
        ]);

        $imageName = $request->old_image;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $imageName);
        }

        Product::where('id', $id)->update([ // ORM update
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'image' => $imageName
        ]);

        return redirect()->route('products.index')->with('success', 'Produk make up berhasil diupdate.');
    }

    public function destroy($id)
    {
        DB::delete("DELETE FROM products WHERE id = ?", [$id]); // Raw delete
        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus.');
    }
}
