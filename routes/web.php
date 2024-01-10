<?php

use App\Http\Controllers\DuAnCTL;
use App\Http\Controllers\TestController;
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

Route::get('/a', function () {
    return view('welcome');
});
Route::match(['POST','GET'],'/',[TestController::class,'index'])->name('index');
Route::match(['POST','GET'],'/category',[TestController::class,'category'])->name('category');
Route::match(['POST','GET'],'/add',[TestController::class,'add']);
Route::match(['POST','GET'],'/addpr',[TestController::class,'addpr']);
Route::match(['POST','GET'],'/addct',[TestController::class,'addct']);
Route::match(['POST','GET'],'/delete/{id}',[TestController::class,'delete']);
Route::match(['POST','GET'],'/update/{id}',[TestController::class,'update']);
Route::match(['POST','GET'],'/deleteCate/{id}',[TestController::class,'deleteCate']);
Route::match(['POST','GET'],'/updateCate/{id}',[TestController::class,'updateCate']);
Route::get('/delete/{id}',[TestController::class,'delete']);
