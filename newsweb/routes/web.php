<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminNewsController;
use App\Http\Controllers\AdminCategoryController;



Route::get('/', [NewsController::class, 'index'])->name('indexx');
Route::get('/category/{id}', [NewsController::class, 'category'])->name('category');
Route::get('/post/{id}', [NewsController::class, 'post'])->name('post');
Route::get('/search', [NewsController::class, 'search'])->name('search');



Route::prefix('adminadmin')->group(function () {
    Auth::routes();
    Route::get('/' , [AdminController::class , 'index'])->name('index');
    Route::resource('news' , AdminNewsController::class);
    Route::resource('category' , AdminCategoryController::class);
    Route::get('logout', [LoginController::class, 'logout']);

});