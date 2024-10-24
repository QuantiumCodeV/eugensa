<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\ProductSearchController;

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
    $products = Product::take(10)->get();
    return view('index', compact('products'));
});

Route::get('/search/results', [ProductSearchController::class, 'results'])->name('search.results');
Route::get('/search/load-more', [ProductSearchController::class, 'loadMore'])->name('products.loadMore');
Route::get('/product/{id}', [ProductSearchController::class, 'product'])->name('product');

Route::post('/addproductdsproduct/{id}', function ($id) {
    $product = Product::find($id);
    return response()->json($product);
});
