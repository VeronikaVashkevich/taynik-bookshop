<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index']);
Route::get('/book-list', [IndexController::class, 'bookList']);
Route::get('/book', [IndexController::class, 'book']);
Route::get('/cart', [IndexController::class, 'cart']);
