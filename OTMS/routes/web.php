<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;

Route::as('front.')->group(function (){
    Route::get('/', [FrontController::class, 'home'])->name('home');
    Route::get('/about-us', [FrontController::class, 'aboutUs'])->name('about');
    Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
