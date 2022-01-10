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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('autors',App\Http\Controllers\AutorController::class)->middleware('auth');
Route::resource('generos',App\Http\Controllers\GeneroController::class)->middleware('auth');
Route::resource('editorials',App\Http\Controllers\EditorialController::class)->middleware('auth');
Route::resource('libros',App\Http\Controllers\LibroController::class)->middleware('auth');
Route::resource('seccions',App\Http\Controllers\SeccionController::class)->middleware('auth');
Route::resource('libroautors',App\Http\Controllers\LibroautorController::class)->middleware('auth');
Route::resource('libroeditorials',App\Http\Controllers\LibroeditorialController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
