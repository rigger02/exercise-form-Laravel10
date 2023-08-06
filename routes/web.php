<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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

Route::get('/',[MahasiswaController::class,'index'])->name('index');
Route::get('/create',[MahasiswaController::class,'create'])->name('create');
Route::post('/',[MahasiswaController::class,'store'])->name('store');
Route::get('/{id}',[MahasiswaController::class,'edit'])->name('edit');
Route::put('/{id}',[MahasiswaController::class,'update'])->name('update');
Route::delete('/{id}',[MahasiswaController::class,'destroy'])->name('destroy');