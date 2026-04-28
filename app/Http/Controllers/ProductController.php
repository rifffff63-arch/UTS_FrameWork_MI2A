<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
   
    public function index()
    {
        $products = Product::with('category')->latest()->paginate(10);
        return view('products.index', compact('products'));
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

    public function update($id = null)
    {
        if (!$id) {
            return "Tambahkan id, contoh: /update/2";
        }

        $product = Product::find($id);

        if (!$product) {
            return "Data tidak ditemukan";
        }

        $product->name = 'Produk Updated';
        $product->price = 99999;
        $product->stock = 20; 
        $product->status = 'tersedia';

        $product->save();

        return redirect('/products');
    }

    public function delete($id = null)
    {
        if (!$id) {
            return "Tambahkan id, contoh: /delete/2";
        }

        $product = Product::find($id);

        if (!$product) {
            return "Data tidak ditemukan";
        }

        $product->delete();

        return redirect('/products');
    }
}