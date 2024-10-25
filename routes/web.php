<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PurchaseOrderController;
use App\Http\Controllers\OrderItemsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashController;

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


Route::get('dash', [DashController::class, 'index'])->name('index');
Route::get('dhl-page', [DashController::class, 'DhlPage'])->name('dhlpage');
Route::get('basic-info', [DashController::class, 'BasicInfo'])->name('basicinfo');
Route::get('breakdown-info', [DashController::class, 'BreakdownInfo'])->name('breakdowninfo');

Route::get('buyer-index', [DashController::class, 'BuyerIndex'])->name('buyerindex');
Route::get('add-buyer', [DashController::class, 'AddBuyer'])->name('addbuyer');
Route::get('edit-buyer', [DashController::class, 'EditBuyer'])->name('editbuyer');

Route::get('product-index', [DashController::class, 'ProductIndex'])->name('productindex');
