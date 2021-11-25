<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PublicacaoController;
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

Route::get('/',[PublicacaoController::class,'index' ])->name('Home');
Route::get('/Adicionar',[PublicacaoController::class,'create' ])->name('Create');
Route::get('/Delete/{id}',[PublicacaoController::class,'destroy' ])->name('Delete');
Route::get('/Edit/{id}',[PublicacaoController::class,'edit' ])->name('Edit');

Route::post('/store',[PublicacaoController::class,'store' ])->name('Store');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
