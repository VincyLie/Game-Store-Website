<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;

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
//Register and Login 
Route::get('/register', [LoginController::class,'tampilanRegister']);
Route::post('/register', [LoginController::class,'Register']);
Route::get('/login', [LoginController::class,'tampilanLogin']);
Route::post('/login', [LoginController::class,'Login']);
Route::get('/logout', [LoginController::class,'Logout'])->middleware('auth');

//Dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);

//Manage Category
//Form Create Category
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create')->middleware('admin');
Route::post('/category', [CategoryController::class, 'store'])->name('category.store')->middleware('admin');
// Form Update Category 
Route::get('/category/edit', [CategoryController::class, 'edit'])->name('category.edit')->middleware('admin');//view
Route::get('/category/view-update/{id}', [CategoryController::class, 'viewupdate'])->middleware('admin');
Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update')->middleware('admin');
Route::get('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy')->middleware('admin');
