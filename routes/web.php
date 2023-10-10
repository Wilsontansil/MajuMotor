<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\EventDataController;
use App\Http\Controllers\EventDataHasMemberController;

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
    Route::get('/member', [MemberController::class, 'member'])->name('member');
    Route::post('/member/create', [MemberController::class, 'memberCreate'])->name('member.create');
    Route::get('/event', [EventDataController::class, 'event'])->name('event');
    Route::post('/event/create', [EventDataController::class, 'eventCreate'])->name('event.create');
    Route::get('/event/detail/{id}', [EventDataHasMemberController::class, 'eventDetail'])->name('event.detail');
    Route::post('/event/detail/addmember', [EventDataHasMemberController::class, 'eventDetailCreate'])->name('event.detail.create');
    Route::get('/user', [DashboardController::class, 'user'])->name('user');
    Route::post('/user/create', [DashboardController::class, 'userCreate'])->name('user.create');
    Route::get('/user/edit/{id}', [DashboardController::class, 'userEdit'])->name('user.edit');
    Route::post('/user/save', [DashboardController::class, 'userSave'])->name('user.save');
});

require __DIR__.'/auth.php';
