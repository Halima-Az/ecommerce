<?php

use App\Http\Controllers\logincontroller;
use App\Http\Controllers\ProdutController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/product/list',[ProdutController::class,'index'])->name('index');
Route::get('/product/create',[ProdutController::class,'create'])->name('create');
Route::post('/product/store',[ProdutController::class,'store'])->name('store');
Route::delete('/product/{produt}',[ProdutController::class,'destroy'])->where('produt','\d+')->name('delete');
Route::get('/product/edit/{produt}',[ProdutController::class,'edit'])->where('produt','\d+')->name('edit');
Route::put('/product/{produt}',[ProdutController::class,'update'])->where('produt','\d+')->name('update');
Route::get('/product/connexion',[logincontroller::class,'connexion'])->name('connexion');
