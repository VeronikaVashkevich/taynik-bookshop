<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [IndexController::class, 'index']);
Route::match(['post', 'get'],'/book-list/{category}', [BookController::class, 'bookList'])->name('bookList');
Route::match(['post', 'get'], '/book/{book_id}', [BookController::class, 'book'])->name('book');
Route::get('/cart', [IndexController::class, 'cart']);
Route::get('/menu', [IndexController::class, 'menu']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/add-to-cart', [BookController::class, 'addCart'])->name('addToCart');

Route::resource('books', DashboardController::class);
Route::resource('reviews', ReviewController::class);

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/dashboard/create-book', [DashboardController::class, 'createBook']);
    Route::post('/dashboard/store-new-book', [DashboardController::class, 'storeNewBook'])->name('store-new-book');
    Route::get('/dashboard/edit-book/', [DashboardController::class, 'edit'])->name('edit-book-form');

    Route::get('/dashboard/new-category', [CategoryController::class, 'create'])->name('create-category');
    Route::get('/dashboard/categories', [CategoryController::class, 'index'])->name('category-dashboard');
    Route::resource('categories', CategoryController::class);
});
