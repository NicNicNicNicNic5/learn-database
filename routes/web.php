<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\EmployeeController;
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

Route::get('/', [EmployeeController::class,'index']);
Route::get('/select', [EmployeeController::class,'index']);
Route::get('/insert', [EmployeeController::class,'insert']);
Route::get('/delete', [EmployeeController::class,'delete']);


// Route::get('/', [BookController::class,'index']);
// Route::get('/insert', [BookController::class,'insert']);
// Route::get('/delete', [BookController::class,'delete']);
// Route::get('/update', [BookController::class,'update']);
// Route::get('/select', [BookController::class,'select']);
// Route::get('/insert', [App\Http\Controllers\BookController::class,'insert']); //ini gabisa
