<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showByCategory($slug)
    {
        $category = Category::where('slug', $slug)->with('products')->firstOrFail();

        $products = $category->products;

        return view('products.by_category', [
            'category' => $category,
            'products' => $products
        ]);
    }
    public function showByBrand($slug)
    {
        $brand = Brand::where('slug', $slug)->with('products')->firstOrFail();

        $products = $brand->products;

        return view('products.by_brand', [
            'brand' => $brand,
            'products' => $products
        ]);
    }
}
