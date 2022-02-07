<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BalanceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SiteController;

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.home');
    Route::get('balance', [BalanceController::class, 'index'])->name('admin.balance');
    Route::get('deposit', [BalanceController::class, 'deposit'])->name('balance.deposit');
    Route::post('deposit', [BalanceController::class, 'depositStore'])->name('deposit.store');
});

Route::get('/', [SiteController::class, 'index'])->name('site.home');

Auth::routes();
