<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('guest:sanctum')->group(function() {
    Route::post('/user/login', [AuthenticationController::class, 'login'])->name('api.user.login');
    Route::post('/user/register', [AuthenticationController::class, 'register'])->name('api.user.register');
});

Route::middleware('auth:sanctum')->group(function() {
    Route::post('/user/logout', [AuthenticationController::class, 'logout'])->name('api.user.logout');

    Route::get('/books', [BooksController::class, 'index'])->name('api.books.index');
    Route::post('/books', [BooksController::class, 'store'])->name('api.books.store');
    Route::put('/books/{book}', [BooksController::class, 'update'])->name('api.books.update');
    Route::delete('/books/{book}', [BooksController::class, 'delete'])->name('api.books.delete');

    Route::get('/authors', [AuthorController::class, 'index'])->name('api.authors.index');
    Route::get('/author/{author}', [AuthorController::class, 'show'])->name('api.authors.show');
});
