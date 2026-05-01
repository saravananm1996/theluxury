<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/live-search', [HomeController::class, 'liveSearch'])->name('live.search');

Route::get('/documentation', [HomeController::class, 'documentation'])->name('documentation');
Route::get('/about-us', [HomeController::class, 'aboutus'])->name('about-us');
Route::get('/contact-us', [HomeController::class, 'contactus'])->name('contact-us');

Route::get('/login', [HomeController::class, 'showLoginForm'])->name('login');
Route::post('/login', [HomeController::class, 'login']);

Route::post('/load-more-products', [HomeController::class, 'loadMore'])->name('products.load.more');

Route::get('/{category}', [HomeController::class, 'index'])->name('category');

Route::get('/ajax/product-quick-view/{id}', [ProductController::class, 'quickView'])->name('product-quick-view');
Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product.show');
