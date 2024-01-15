<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\MemberController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\StockOrderController;
// use App\Http\Controllers\EventDataController;
// use App\Http\Controllers\EventDataHasMemberController;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return redirect('/dashboard');
    })->name('home');
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/supplier', [SupplierController::class, 'supplier'])->name('supplier');
    Route::post('/supplier/create', [SupplierController::class, 'supplierCreate'])->name('supplier.create');
    Route::get('/supplier/edit/{id}', [SupplierController::class, 'supplierEdit'])->name('supplier.edit');
    Route::post('/supplier/save', [SupplierController::class, 'supplierSave'])->name('supplier.save');

    Route::get('/user', [DashboardController::class, 'user'])->name('user');
    Route::post('/user/create', [DashboardController::class, 'userCreate'])->name('user.create');
    Route::get('/user/edit/{id}', [DashboardController::class, 'userEdit'])->name('user.edit');
    Route::post('/user/save', [DashboardController::class, 'userSave'])->name('user.save');

    Route::get('/stockorder', [StockOrderController::class, 'stockorder'])->name('stockorder');
    Route::post('/stockorder/create', [StockOrderController::class, 'stockorderCreate'])->name('stockorder.create');
});

require __DIR__.'/auth.php';
