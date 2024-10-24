<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PurchaseOrderController;
use App\Http\Controllers\OrderItemsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;


// Purchase Orders
Route::get('/purchase-orders', [PurchaseOrderController::class, 'index'])->name('purchase_order.index');

Route::get('/purchase-order/create', [PurchaseOrderController::class, 'create'])->name('purchase_order.create');
Route::post('/purchase-order', [PurchaseOrderController::class, 'store'])->name('purchase_order.store');


// Order Items
Route::get('/order-items/create', [OrderItemsController::class, 'create'])->name('order_items.create');
Route::post('/order-items', [OrderItemsController::class, 'store'])->name('order_items.store');

// User 
Route::resource('users', UserController::class);

// Auth
// Authentication Routes
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Protected routes that require authentication
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard'); // Example protected page
    })->name('dashboard');
});