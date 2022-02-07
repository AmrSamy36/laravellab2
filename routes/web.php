<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticalController;

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

//for categories 
Route::get('/categories', [CategoryController::class, 'list'])->name('categories.list');
Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/save', [CategoryController::class, 'save'])->name('categories.save');
Route::get('/update/{id}', [CategoryController::class, 'updateShow']);
Route::post('/update', [CategoryController::class, 'Update'])->name('categories.edit');
Route::get('/delete/{id}', [CategoryController::class, 'Delete']);

//for Articales
Route::get('/articales', [ArticalController::class, 'list'])->name('articale.list');
Route::get('/create', [ArticalController::class, 'create'])->name('articale.create');
Route::post('/save', [ArticalController::class, 'save'])->name('articale.save');
Route::get('/delete/{id}', [ArticalController::class, 'Delete']);
Route::get('/update/{id}', [ArticalController::class, 'updateShow']);
Route::post('/update', [ArticalController::class, 'Update'])->name('articale.edit');
