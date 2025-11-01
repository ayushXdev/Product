<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

Route::view('/', 'auth.login');


Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginUser')->name('loginUser');
});


Route::controller(ProductController::class)->group(function () {
    Route::get('dashboard', 'dashboard')->name('dashboard');
    Route::get('addproduct', 'addproduct')->name('addproduct');
    Route::get('list', 'list')->name('list');
    Route::post('add', 'addData')->name('add');
    Route::get('Edit/{id}', 'Edit')->name('Edit');
    Route::put('update/{id}', 'updateData')->name('update');
    Route::get('Delete/{id}', 'Delete')->name('Delete');
});
