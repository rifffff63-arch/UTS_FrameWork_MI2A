<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->latest()->paginate(10);

        return view('products.index', compact('products'));
    }

   
    public function create()
    {
        $categories = Category::all();

        return view('products.create', compact('categories'));
    }

    
    public function store(Request $request)
    {
        Product::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect('/products');
    }

    
    public function edit($id)
    {
        $product = Product::find($id);

        $categories = Category::all();

        return view('products.edit', compact('product', 'categories'));
    }

    
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $product->update([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect('/products');
    }

    public function insert()
    {
        $category = Category::first();

        if (!$category) {
            return "Kategori belum ada!";
        }

        $product = new Product;

        $product->category_id = $category->id;
        $product->name = 'Produk Baru';
        $product->price = 50000;
        $product->stock = 10;
        $product->description = 'Produk contoh';
        $product->status = 'tersedia';

        $product->save();

        return redirect('/products');
    }

    
    public function delete($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return "Data tidak ditemukan";
        }

        $product->delete();

        return redirect('/products');
    }
}