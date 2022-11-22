<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/student/add', [StudentController::class, 'index'])->name('student.add');
Route::post('/student/store', [StudentController::class, 'store'])->name('student.store');
Route::get('/student/manage', [StudentController::class, 'manage'])->name('student.manage');
Route::get('/student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
Route::post('/student/update/{id}', [StudentController::class, 'update'])->name('student.update');
Route::get('/student/delete/{id}', [StudentController::class, 'delete'])->name('student.delete');
Route::get('/student/details/{id}', [StudentController::class, 'details'])->name('student.details');
