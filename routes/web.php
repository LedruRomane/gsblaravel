<?php

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

Route::get('/', [\App\Http\Controllers\StaticController::class, 'index'])->name('index');

Route::get('/france', [\App\Http\Controllers\StaticController::class, 'france'])->name('france');

Route::get('/international', [\App\Http\Controllers\StaticController::class,'international'])->name('international');

Route::get('/produit', [\App\Http\Controllers\StaticController::class,'produit'])->name('produit');

Route::get('/contact',[\App\Http\Controllers\ContactController::class,'index'])->name('contact.index');
Route::post('/contact',[\App\Http\Controllers\ContactController::class,'submit'])->name('contact.submit');

