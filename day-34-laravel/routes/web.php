<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/category/add', [CategoryController::class, 'index'])->name('category.add');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/manage', [CategoryController::class, 'manage'])->name('category.manage');
Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');

Route::get('/blog/add', [BlogController::class, 'index'])->name('blog.add');
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
Route::get('/blog/manage', [BlogController::class, 'manage'])->name('blog.manage');






