<?php

use App\Http\Controllers\Be\BeCategoryController;
use App\Http\Controllers\Be\BeHomeController;
use App\Http\Controllers\Be\BeProductController;
use App\Http\Controllers\Be\BeUserController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\Fe\FeHomeController;
use Illuminate\Support\Facades\Route;

Route::delete('ajax/destroy', [CommonController::class, 'destroy'])->name('ajax.destroy');
Route::prefix('admin')->group(function () {
    Route::get('/login', [BeUserController::class, 'login'])->name('admin.login');
    Route::post('/login', [BeUserController::class, 'authenticate'])->name('admin.post.login');
    Route::middleware(['admin'])->group(function () {
        Route::post('/logout', [BeUserController::class, 'logout'])->name('admin.post.logout');
        Route::get('/', [BeHomeController::class, 'index'])->name('admin.home.index');
        Route::prefix('/category')->group(function () {
            Route::get('/', [BeCategoryController::class, 'index'])->name('admin.category.index');
            Route::get('/create', [BeCategoryController::class, 'create'])->name('admin.category.create');
            Route::post('/store', [BeCategoryController::class, 'store'])->name('admin.category.store');
            Route::get('/edit/{id}', [BeCategoryController::class, 'edit'])->name('admin.category.edit');
            Route::post('/update/{id}', [BeCategoryController::class, 'update'])->name('admin.category.update');
        });
        Route::prefix('/product')->group(function () {
            Route::get('/', [BeProductController::class, 'index'])->name('admin.product.index');
            Route::get('/create', [BeProductController::class, 'create'])->name('admin.product.create');
            Route::post('/store', [BeProductController::class, 'store'])->name('admin.product.store');
            Route::get('/edit/{id}', [BeProductController::class, 'edit'])->name('admin.product.edit');
            Route::post('/update/{id}', [BeProductController::class, 'update'])->name('admin.product.update');
        });
    });
});

Route::get('/', [FeHomeController::class, 'index'])->name('home.index');
