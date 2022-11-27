<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\AuthController;
use App\http\Controllers\KarakterController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DashboardController;

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
/*guest*/
Route::get('/',[PageController::class,'home']);
Route::get('/karakter={id_karakter}',[PageController::class,'karakter']);
Route::get('/login',[AuthController::class,'index'])->name('login');
Route::post('/login',[AuthController::class,'login']);

/*admin*/
Route::get('/dashboard',[DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard',[DashboardController::class,'search'])->middleware('auth');
Route::get('/dashboard/karakter',[KarakterController::class,'index'])->middleware('auth');
Route::get('/dashboard/karakter/tambah',[KarakterController::class,'create'])->middleware('auth');
Route::post('/dashboard/karakter/store',[KarakterController::class,'store'])->middleware('auth');
Route::get('/dashboard/karakter/edit={id_karakter}',[KarakterController::class,'edit'])->middleware('auth');
Route::put('/dashboard/karakter/{id_karakter}',[KarakterController::class,'update'])->middleware('auth');
Route::delete('/dashboard/karakter/hapus={id_karakter}',[KarakterController::class,'destroy'])->middleware('auth');
Route::get('/dashboard/karakter/',[KarakterController::class,'search'])->middleware('auth');