<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LendController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ReviewController;




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
    return view('welcome');
})->name('home');
Route::resource('users', UserController::class);
Route::resource('roles', RoleController::class);
Route::resource('books', BookController::class);
Route::resource('authors', AuthorController::class);
Route::resource('lends', LendController::class);
Route::resource('reviews', ReviewController::class);


