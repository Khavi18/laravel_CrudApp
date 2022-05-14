<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\DeleteController;

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

//Route::get('/', [ViewController::class,'index']);

Route::get('/addform', [AddController::class,'addform']);
Route::post('add', [AddController::class,'add']);

Route::get('/', [EditController::class,'index']);
Route::get('edit/{id}',[EditController::class,'show']);
Route::post('edit/{id}',[EditController::class,'edit']);

Route::get('/delete', [DeleteController::class,'index']);
Route::get('delete/{id}',[DeleteController::class,'delete']);

