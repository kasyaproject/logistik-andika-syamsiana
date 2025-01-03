<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductInController;
use App\Http\Controllers\ProductOutController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::patch('/product/{product}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/{product}', [ProductController::class, 'destroy'])->name('product.destroy');

    Route::get('/product-in', [ProductInController::class, 'index'])->name('productIn.index');
    Route::get('/product-in/create', [ProductInController::class, 'create'])->name('productIn.create');
    Route::post('/product-in', [ProductInController::class, 'store'])->name('productIn.store');
    Route::get('/product-in/{productIn}/edit', [ProductInController::class, 'edit'])->name('productIn.edit');
    Route::patch('/product-in/{productIn}', [ProductInController::class, 'update'])->name('productIn.update');
    Route::delete('/product-in/{productIn}', [ProductInController::class, 'destroy'])->name('productIn.destroy');

    Route::get('/product-out', [ProductOutController::class, 'index'])->name('productOut.index');
    Route::get('/product-out/create', [ProductOutController::class, 'create'])->name('productOut.create');
    Route::post('/product-out', [ProductOutController::class, 'store'])->name('productOut.store');
    Route::get('/product-out/{productOut}/edit', [ProductOutController::class, 'edit'])->name('productOut.edit');
    Route::patch('/product-out/{productOut}', [ProductOutController::class, 'update'])->name('productOut.update');
    Route::delete('/product-out/{productOut}', [ProductOutController::class, 'destroy'])->name('productOut.destroy');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
