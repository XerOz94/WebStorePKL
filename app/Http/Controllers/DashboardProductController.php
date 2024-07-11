<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.products.index', [
            'products' => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.products.create', [
            'products' => Product::all(),
            'categories' => Category::all(),
            'brands' => Brand::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'category_id' => 'required|max:100',
            'brand_id' => 'required|max:100',
            'deskripsi' => 'required|max:255',
            'harga' => 'required',
            'stok' => 'required',
            'image' => 'required|max:255',
        ]);

        Product::create([
            'name' => $validatedData['name'],
            'category_id' => $validatedData['category_id'],
            'brand_id' => $validatedData['brand_id'],
            'deskripsi' => $validatedData['deskripsi'],
            'harga' => $validatedData['harga'],
            'stok' => $validatedData['stok'],
            'image' => $validatedData['image'],
        ]);
        return redirect('/dashboard/products')->with('success', 'Berhasil menambahkan product');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('dashboard.products.edit', [
            'products' => $product,
            'categories' => Category::all(),
            'brands' => Brand::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'category_id' => 'required|max:100',
            'brand_id' => 'required|max:100',
            'deskripsi' => 'required|max:255',
            'harga' => 'required',
            'stok' => 'required',
            'image' => 'required|max:255',
        ]);

        Product::where('id', $product->id)->update([
            'name' => $validatedData['name'],
            'category_id' => $validatedData['category_id'],
            'brand_id' => $validatedData['brand_id'],
            'deskripsi' => $validatedData['deskripsi'],
            'harga' => $validatedData['harga'],
            'stok' => $validatedData['stok'],
            'image' => $validatedData['image'],
        ]);

        return redirect('/dashboard/products')->with('success', 'Berhasil mengubah product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        return redirect('/dashboard/products')->with('success', 'Berhasil menghapus product');
    }
}
