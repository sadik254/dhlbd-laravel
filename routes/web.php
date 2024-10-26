<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PurchaseOrderController;
use App\Http\Controllers\OrderItemsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DhlOrderController;


Route::get('/', function () {
    return redirect('/users');
})->middleware('auth');

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
    Route::get('/dashboard', function () {
        return view('dashboard'); 
    })->name('dashboard');

    // Purchase Orders
    Route::get('/purchase-orders', [PurchaseOrderController::class, 'index'])->name('purchase_order.index');
    Route::get('/purchase-order/create', [PurchaseOrderController::class, 'create'])->name('purchase_order.create');
    Route::post('/purchase-order', [PurchaseOrderController::class, 'store'])->name('purchase_order.store');

    Route::get('/dhl-order', [PurchaseOrderController::class, 'dhlOrder'])->name('dhl.order');
    Route::get('/shipment-details', [PurchaseOrderController::class, 'shipmentDetails'])->name('shipment.details');

    // Order Items
    Route::get('/order-items', [OrderItemsController::class, 'index'])->name('order_items.index');
    Route::get('/order-items/create', [OrderItemsController::class, 'create'])->name('order_items.create');
    Route::post('/order-items', [OrderItemsController::class, 'store'])->name('order_items.store');

    // User Management
    Route::resource('users', UserController::class);
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

    // Buyer Routes
    Route::get('/buyers', [BuyerController::class, 'index'])->name('buyers.index');
    Route::get('/buyers/create', [BuyerController::class, 'create'])->name('buyers.create');
    Route::post('/buyers', [BuyerController::class, 'store'])->name('buyers.store');
    Route::get('/buyers/{id}', [BuyerController::class, 'show'])->name('buyers.show');
    Route::get('/buyers/{id}/edit', [BuyerController::class, 'edit'])->name('buyers.edit');
    Route::put('/buyers/{id}', [BuyerController::class, 'update'])->name('buyers.update');
    Route::delete('/buyers/{id}', [BuyerController::class, 'destroy'])->name('buyers.destroy');

    // Product Routes
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

    // DHL Routes
    Route::get('/dhlorders', [DhlOrderController::class, 'index'])->name('dhl_orders.index');
    Route::get('/dhlorders/create', [DhlOrderController::class, 'create'])->name('dhl_orders.create');
    Route::post('/dhlorders', [DhlOrderController::class, 'store'])->name('dhl_orders.store');

});
