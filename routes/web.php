<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backoffice\DashboardController;
use App\Http\Controllers\Backoffice\PermissionController;
use App\Http\Controllers\Backoffice\RoleController;
use App\Http\Controllers\Backoffice\UserController;
use App\Http\Controllers\Backoffice\CategoryController;
use App\Http\Controllers\Backoffice\SupplierController;
use App\Http\Controllers\Backoffice\ProductController;
use App\Http\Controllers\Backoffice\StockController;
use App\Http\Controllers\Backoffice\TransactionController;
use App\Http\Controllers\Backoffice\OrderController;
use App\Http\Controllers\Backoffice\ReportController;
use App\Http\Controllers\Landing\CartController;
use App\Http\Controllers\Landing\ProductController as LandingProductController;
use App\Http\Controllers\Landing\CategoryController as LandingCategoryController;
use App\Http\Controllers\Landing\TransactionController as LandingTransactionController;
use App\Http\Controllers\Landing\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Home
Route::get('/', HomeController::class)->name('home');

// Landing Product
Route::controller(LandingProductController::class)->as('product.')->group(function () {
    Route::get('/product', 'index')->name('index');
    Route::get('/product/{product:slug}', 'show')->name('show');
});

// Landing Category
Route::controller(LandingCategoryController::class)->as('category.')->group(function () {
    Route::get('/category', 'index')->name('index');
    Route::get('/category/{category:slug}', 'show')->name('show');
});

// Cart
Route::controller(CartController::class)->middleware('auth')->as('cart.')->group(function () {
    Route::get('/cart', 'index')->name('index');
    Route::post('/cart/{product:id}', 'store')->name('store');
    Route::put('/cart/update/{cart:id}', 'update')->name('update');
    Route::delete('/cart/delete/{cart}', 'destroy')->name('destroy');
});

// Landing Transaction
Route::post('/transaction', LandingTransactionController::class)->middleware('auth')->name('transaction.store');

// Dashboard
Route::group(['prefix' => 'backoffice', 'as' => 'backoffice.', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::resource('/permission', PermissionController::class);
    Route::resource('/role', RoleController::class);
    Route::resource('/user', UserController::class);
    Route::resource('/category', CategoryController::class);
    Route::resource('/supplier', SupplierController::class);
    Route::resource('/product', ProductController::class);

    // Stock
    Route::controller(StockController::class)->prefix('/stock')->as('stock.')->group(function () {
        Route::get('/index', 'index')->name('index');
        Route::put('/update/{id}', 'update')->name('update');
    });

    // Transaction
    Route::get('/transaction', TransactionController::class)->name('transaction');

    // Order
    Route::resource('/order', OrderController::class)->name('*', 'order');

    // Report
    Route::controller(ReportController::class)->prefix('/report')->as('report.')->group(function () {
        Route::get('/index', 'index')->name('index');
        Route::get('/filter', 'filter')->name('filter');
        Route::get('/pdf/{fromDate}/{toDate}', 'pdf')->name('pdf');
    });
});