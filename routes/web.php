<?php

use App\Http\Controllers\TaskController;
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

Route::get('/', [TaskController::class, 'index'])->name('home');

Route::post('/save-task', [TaskController::class, 'saveTask'])->name('save');
Route::get('/update/{id}', [TaskController::class, 'update'])->name('update');
Route::get('/delete-task/{id}', [TaskController::class, 'deleteTask'])->name('delete');
Route::post('/update-task/{id}', [TaskController::class, 'updateTask'])->name('updateTask');
