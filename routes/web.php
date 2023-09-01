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

Route::get('/', function () {
    return view('auth.login');
});

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