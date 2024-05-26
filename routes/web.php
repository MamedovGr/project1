<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;

use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/product/{id}', [MainController::class, 'details'])->name('details');
Route::get('/search', [ProductController::class,'index'])->name('product.index');

require __DIR__.'/auth.php';



