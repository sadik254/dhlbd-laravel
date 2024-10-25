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


// For test this routes are without middleware
// Route::get('/users', [UserController::class, 'index'])->name('users.index');
//     Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
//     Route::post('/users', [UserController::class, 'store'])->name('users.store');
//     Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
//     Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
//     Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
//     Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

// All routes that require authentication
Route::middleware(['auth'])->group(function () {

    // Dashboard
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
