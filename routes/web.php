<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Home\HomeController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/formulir', [HomeController::class, 'formulir']);
Route::post('/formulir/create', [HomeController::class, 'store']);
Route::get('/bukti', [HomeController::class, 'bukti']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/user/{id}/edit', [RegisterController::class, 'edit']);
Route::put('/user/{id}', [RegisterController::class, 'update']);

Route::get('/users', [LoginController::class, 'getAllUser']);
Route::delete('/user/delete/{id}', [LoginController::class, 'delete']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [AdminController::class, 'index']);
Route::get('/create', [AdminController::class, 'create']);
Route::post('/create', [AdminController::class, 'store']);
Route::get('/{id}', [AdminController::class, 'show']);
Route::get('/{id}/edit', [AdminController::class, 'edit']);
Route::put('/{id}', [AdminController::class, 'update']);
Route::delete('/delete/{id}', [AdminController::class, 'destroy']);

Route::get('/cetak/laporan', [AdminController::class, 'laporan']);
Route::get('/cetak/formulir', [AdminController::class, 'formulir']);
