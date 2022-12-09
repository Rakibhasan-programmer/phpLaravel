<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FruitController;
use App\Http\Controllers\FrontController;

Route::get('/', [FrontController::class, 'home'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    // category
    Route::get('/add-category', [CategoryController::class, 'addCategory'])->name('add-category');
    Route::post('/new-category', [CategoryController::class, 'newCategory'])->name('new-category');
    Route::get('/manage-category', [CategoryController::class, 'manageCategory'])->name('manage-category');
    Route::get('/edit-category/{id}', [CategoryController::class, 'editCategory'])->name('edit-category');
    Route::post('/update-category/{id}', [CategoryController::class, 'updateCategory'])->name('update-category');
    Route::get('/delete-category/{id}', [CategoryController::class, 'deleteCategory'])->name('delete-category');

    // fruit
    Route::get('/add-fruit', [FruitController::class, 'addFruit'])->name('add-fruit');
    Route::post('/new-fruit', [FruitController::class, 'newFruit'])->name('new-fruit');
    Route::get('/manage-fruit', [FruitController::class, 'manageFruit'])->name('manage-fruit');
});
