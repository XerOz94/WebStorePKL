<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Models\Store;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/stores', function () {
    $stores = Product::with('category', 'brand')->get();
    return view('stores', [
        'title' => 'Store Page',
        'stores' => $stores
    ]);
});

Route::get('/categories', function () {
    $categories = Category::with('products')->get();
    return view('categories', [
        'title' => 'Categories Page',
        'categories' => $categories
    ]);
});


Route::get('/categories/{slug}/products', [ProductController::class, 'showByCategory'])->name('products.byCategory');
Route::get('/brands/{slug}/products', [ProductController::class, 'showByBrand'])->name('products.byBrand');

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index'])->name('register.index')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => 'Dashboard Page'
    ]);
})->middleware('auth');

Route::post('/logout', [LoginController::class, 'logout']);

Route::resource('/dashboard/products', DashboardProductController::class)->middleware('auth');