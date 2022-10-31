<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BookController::class,'index']);
Route::get('/insert', [BookController::class,'insert']);
Route::get('/insert2', [BookController::class,'insert2']);
Route::get('/insert3', [BookController::class,'insert3']);
Route::get('/delete', [BookController::class,'delete']);
Route::get('/update', [BookController::class,'update']);
Route::get('/select', [BookController::class,'select']);
Route::get('/select2', [BookController::class,'select2']);
// Route::get('/insert', [App\Http\Controllers\BookController::class,'insert']); //ini gabisa
