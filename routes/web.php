<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/add', [ProductController::class,'add']);
Route::post('/create',[ProductController::class,'create']);
Route::get('/',[ProductController::class,'read'])->name('index');
Route::resource('products', ProductController::class);
