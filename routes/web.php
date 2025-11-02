<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SellerManagementController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookManagementController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SalesAnalyticsController;
use App\Http\Controllers\DocumentationController;
use App\Http\Controllers\PermissionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    // Dashboard (both admin and seller)
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/pending', [DashboardController::class, 'pending'])->name('pending');

    // Seller Management (admin only)
    Route::get('/sellers', [SellerManagementController::class, 'index'])->name('sellers.index');
    Route::get('/sellers/{seller}', [SellerManagementController::class, 'show'])->name('sellers.show');
    Route::delete('/sellers/{seller}', [SellerManagementController::class, 'destroy'])->name('sellers.destroy');
    Route::post('/sellers/{seller}/approve', [SellerManagementController::class, 'approve'])->name('sellers.approve');
    Route::post('/sellers/{seller}/reject', [SellerManagementController::class, 'reject'])->name('sellers.reject');

    // Categories (admin only)
    Route::resource('categories', CategoryController::class);

    // Book Management (admin can manage all, seller can manage own)
    Route::resource('book-management', BookManagementController::class);

    // Books Catalogue (public browsing for authenticated users)
    Route::get('/books', [BookController::class, 'index'])->name('books.index');
    Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');

    // Orders (both roles, different permissions)
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');
    Route::patch('/orders/{order}', [OrderController::class, 'update'])->name('orders.update');

    // Sales Analytics (seller only)
    Route::get('/analytics', [SalesAnalyticsController::class, 'index'])->name('analytics');

    // Permissions (admin only)
    Route::get('/permissions', [PermissionController::class, 'index'])->name('permissions.index');
    Route::put('/permissions/{role}', [PermissionController::class, 'update'])->name('permissions.update');

    // Documentation
    Route::get('/docs', [DocumentationController::class, 'index'])->name('docs.index');
    Route::get('/docs/{section}', [DocumentationController::class, 'show'])->name('docs.show');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
