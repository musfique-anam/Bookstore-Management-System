<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

// Home page showing all books
Route::get('/', [BookController::class, 'index'])->name('home');

// All book routes (create, store, show, edit, update, destroy, index)
Route::resource('books', BookController::class);