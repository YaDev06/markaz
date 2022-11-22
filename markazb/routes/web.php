<?php

use App\Http\Controllers\GuruhController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QabulController;
use App\Http\Controllers\GuruhQabulPupilsController;
use App\Models\Kurs;
use App\Models\Qabul;
use App\Http\Controllers\TolovController;
use Illuminate\Support\Facades\Auth;

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


Route::resource('/qabul',QabulController::class);
Route::get('/showPupils',[QabulController::class, 'showPupils'])->name('showPupils');
Route::get('/guruhQabul',[QabulController::class, 'guruhQabul'])->name('guruhQabul');
Route::get('/statusCheck/{id}',[QabulController::class, 'statusCheck'])->name('statusCheck');
Route::get('/statusFail/{id}',[QabulController::class, 'statusFail'])->name('statusFail');
Route::get('guruhQabulPupils/{id}',[GuruhQabulPupilsController::class,'index'])->name('guruhQabulPupils.home');
Route::get('/addguruh',[GuruhQabulPupilsController::class,'add'])->name('addguruh');
Route::resource('/guruh',GuruhController::class);  
Route::resource('/tolov',TolovController::class);  
Route::get('/gSalbiy',[GuruhController::class,'gSalbiy'])->name('gSalbiy');
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');