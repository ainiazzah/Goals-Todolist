<?php

use Whoops\Run;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;

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
Route::get('/todo',[TodoController::class,'index']);
Route::resource('/todo',TodoController::class);
Route::post('todo/destory/bulk',[TodoController::class,'bulkDestroy'])->name('todo.destroy.bulk');
Route::post('todo/edit/bulk',[TodoController::class,'bulkEdit'])->name('todo.edit.bulk');
Route::put('todo/edit/bulk',[TodoController::class,'bulkUpdate'])->name('todo.edit.bulk.submit');
Route::get('/', [SigninController::class, 'index'])->name('login');
Route::post('/signin', [SigninController::class, 'authenticate']);
Route::post('/signout', [SigninController::class, 'signout']);

Route::get('/signup', [SignupController::class, 'index'])->middleware('guest');
Route::post('/signup', [SignupController::class, 'store']);