<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('admin')->group(function () {
    Route::get('login', [LoginController::class, 'showFormLogin'])->name('admin.showFormLogin');
    Route::post('login', [LoginController::class, 'login'])->name('admin.login');
    Route::middleware('checkLogin')->group(function () {
        Route::prefix('books')->group(function () {
            Route::get('/', [\App\Http\Controllers\BookController::class, 'index'])->name('books.index');
            Route::get('/create', [\App\Http\Controllers\BookController::class, 'create'])->name('books.create');
        });
        Route::prefix('users')->group(function () {
            Route::get('/', [UserController::class, 'index'])->name('users.index');
            Route::get('create', [UserController::class, 'create'])->name('users.create');
            Route::get('/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
            Route::post('/{id}/edit', [UserController::class, 'update'])->name('users.update');
            Route::post('create', [UserController::class, 'store'])->name('users.store');
            Route::get('/{id}/delete', [UserController::class, 'delete'])->name('users.delete');
        });
        Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');

        Route::get('/', function () {
            return view('admin.dashboard');
        });
    });
});
