<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [IndexController::class, 'index']);
Route::get('/book-list', [IndexController::class, 'bookList']);
Route::get('/book', [IndexController::class, 'book']);
Route::get('/cart', [IndexController::class, 'cart']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard/dashboard');
    });
});
