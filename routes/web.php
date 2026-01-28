<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/',          [DashboardController::class, 'index']);
Route::get('/sales',     [DashboardController::class, 'index']);

// CUSTOMERS --------------------------------------------------------------------------------------

Route::get('/customers', [CustomerController::class, 'index']);

Route::get('/customers/create', [CustomerController::class, 'create']);                              
Route::post('/customers', [CustomerController::class, 'store']);

Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit']);
Route::put('/customers/{customer}', [CustomerController::class, 'update']);

Route::get('/customers/{customer}/delete', [CustomerController::class, 'delete']);
Route::delete('/customers/{customer}', [CustomerController::class, 'destroy']);

// PRODUCTS ---------------------------------------------------------------------------------------

Route::get('/products',  [ProductController::class, 'index']);

Route::get('/products/create', [ProductController::class, 'create']);                              
Route::post('/products', [ProductController::class, 'store']);

Route::get('/products/{product}/edit', [ProductController::class, 'edit']);
Route::put('/products/{product}', [ProductController::class, 'update']);

Route::get('/products/{product}/delete', [ProductController::class, 'delete']);
Route::delete('/products/{product}', [ProductController::class, 'destroy']);