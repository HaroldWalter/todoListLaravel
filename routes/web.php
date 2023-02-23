<?php

use App\Http\Controllers\TodoController;
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

Route::get('/', [TodoController::class, 'index']);

Route::get('/todo/create', [TodoController::class, 'create']);
Route::post('/todo/create', [TodoController::class, 'store']);

Route::get('/todo/edit/{id}', [TodoController::class, 'show']);
Route::put('/todo/edit/{id}', [TodoController::class, 'edit']);

Route::delete('todo/delete/{id}', [TodoController::class, 'destroy']);
