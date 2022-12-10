<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SellingController;
use App\Http\Controllers\EmployeeController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [EmployeeController::class,'index']);
// Route::get('/select', [EmployeeController::class,'index']);
// Route::get('/insert', [EmployeeController::class,'insert']);
// Route::get('/delete', [EmployeeController::class,'delete']);

//controller book lama
// Route::get('/', [BookController::class,'index']);
// Route::get('/insert', [BookController::class,'insert']);
// Route::get('/delete', [BookController::class,'delete']);
// Route::get('/update', [BookController::class,'update']);
// Route::get('/select', [BookController::class,'select']);
// Route::get('/insert', [App\Http\Controllers\BookController::class,'insert']); //ini gabisa

// controller book baru (Eloquent-ORM)
Route::get('/', [BookController::class, 'select']);
Route::get('/select', [BookController::class, 'select']);
Route::get('/insert', [BookController::class, 'insert']);
Route::get('/update', [BookController::class, 'update']);
Route::get('/delete', [BookController::class, 'delete']);
Route::get('/select', [BookController::class, 'select']);
Route::get('/latest', [BookController::class, 'latest']);
Route::get('/softdelete', [BookController::class, 'softdelete']);
Route::get('/restore', [BookController::class, 'restore']);
Route::get('/attach', [BookController::class, 'attach']);
Route::get('/detach', [BookController::class, 'detach']);
Route::get('/sync', [BookController::class, 'sync']);
Route::get('/toggle', [BookController::class, 'toggle']);
Route::get('/pivot', [CategoryController::class, 'pivot']);

// Route::prefix('/selling')->group(function(){
//     Route::get('select', [SellingController::class, 'select']);
//     Route::get('insert', [SellingController::class, 'insert']);
//     Route::get('update', [SellingController::class, 'update']);
//     Route::get('delete', [SellingController::class, 'delete']);
// });
