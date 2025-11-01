<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;



Route::view('/','auth.login');


Route::get('login',[AuthController::class,'login'])->name('login');
Route::post('login',[AuthController::class,'loginUser'])->name('login');


Route::get('dashboard',[ProductController::class,'dashboard'])->name('dashboard');
Route::get('addproduct',[ProductController::class,'addproduct'])->name('addproduct');
Route::get('list',[ProductController::class,'list'])->name('list');
Route::post('add',[ProductController::class,'addData'])->name('add');

Route::get('Edit/{id}',[ProductController::class,'Edit'])->name('Edit');
Route::put('update/{id}',[ProductController::class,'updateData'])->name('update');
Route::get('Delete/{id}',[ProductController::class,'Delete'])->name('Delete');
