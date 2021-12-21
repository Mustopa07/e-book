<?php

use App\Http\Controllers\BookController;
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

Route::get('/', function () {
    return view('landing-page');
});

Route::get('list-book', function () {
    return view('list-book');
})->name('list-book');

Route::get('login', function () {
    return view('auth.login');
})->name('login');

Route::get('regist', function () {
    return view('auth.regist');
})->name('regist');

Route::get('admin', function () {
    return view('admin.dashboard');
})->name('admin-dashboard');

Route::get('admin/book-management', BookController::class)
        ->name('admin-book-management');

Route::get('admin/user-management', UserController::class)
        ->name('admin-user-management');

Route::post('admin/user-management/store', [UserController::class, 'store'])
        ->name('admin.user.store');

Route::get('admin/user-management/{id}/destroy', [UserController::class, 'destroy'])
        ->name('admin.user.destroy');

Route::post('admin/user-management/update', [UserController::class, 'update'])
        ->name('admin.user.update');
