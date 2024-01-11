<?php

use App\Http\Controllers\Car\CarController;
use App\Http\Controllers\Car\ReviewController;
use App\Http\Controllers\Car\BookController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/cars', [CarController::class, 'index']);
Route::get('/cars/detail/{id}', [CarController::class, 'detail']);

Route::get('/cars/add', [CarController::class, 'add']);
Route::post('/cars/add' ,[CarController::class, 'create']);

Route::get('/reviews/delete/{id}', [ReviewController::class, 'delete']);
Route::post('/reviews/add', [ReviewController::class, 'create']);

Route::get('/cars/show', [CarController::class, 'show']);

Route::get('/cars/delete/{id}', [CarController::class, 'delete']);

Route::get('/cars/edit/{id}', [CarController::class, 'edit']);
Route::post('/cars/edit/{id}', [CarController::class, 'update']);

Route::post('cars/book/{id}', [BookController::class, 'book']);

Route::get('cars/book/show', [BookController::class, 'show']);
Route::get('cars/book/decline/{id}', [BookController::class, 'decline']);
Route::get('cars/book/approve/{id}', [BookController::class, 'approve']);

Route::get('/', [CarController::class, 'index'] );

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

