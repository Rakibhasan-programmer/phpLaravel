<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/', [StudentController::class, 'index'])->name('home');
Route::post('/new-student', [StudentController::class, 'newStudent'])->name('new-student');
Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [StudentController::class, 'update'])->name('update');
Route::get('/delete/{id}', [StudentController::class, 'delete'])->name('delete');
