<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/',          [DashboardController::class, 'index']);
Route::get('/products',  [DashboardController::class, 'index']);
Route::get('/sales',     [DashboardController::class, 'index']);

Route::get('/customers', [CustomerController::class, 'index']);

Route::get('/customers/create', [CustomerController::class, 'create']);                              
Route::post('/customers', [CustomerController::class, 'store']);

Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit']);
Route::put('/customers/{customer}', [CustomerController::class, 'update']);

Route::get('/customers/{customer}/delete', [CustomerController::class, 'delete']);
Route::delete('/customers/{customer}', [CustomerController::class, 'destroy']);