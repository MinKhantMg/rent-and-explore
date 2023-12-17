<?php

use App\Http\Controllers\Car\CarController;
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





Route::get('/', [CarController::class, 'index'] );

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
