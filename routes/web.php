<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GameDetailController;
use App\Http\Controllers\ManageGameController;
use App\Http\Controllers\ReviewController;

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
Route::get('/', [LoginController::class,'tampilanLogin']);
Route::get('/login', [LoginController::class,'tampilanLogin']);
Route::post('/login', [LoginController::class,'Login']);
Route::get('/logout', [LoginController::class,'Logout'])->middleware('auth');

//Dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);
//Search
Route::get('/dashboard/search', [DashboardController::class, 'search']);
//GameDetail
Route::get('gamedetail/{id}', [GameDetailController::class, 'index']);

//Manage Category
//Form Create Category
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create')->middleware('admin');
Route::post('/category', [CategoryController::class, 'store'])->name('category.store')->middleware('admin');
// Form Update Category 
Route::get('/category/edit', [CategoryController::class, 'edit'])->name('category.edit')->middleware('admin');//view
Route::get('/category/view-update/{id}', [CategoryController::class, 'viewupdate'])->middleware('admin');
Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update')->middleware('admin');
Route::get('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy')->middleware('admin');

//Manage Game
//Form Add Game 
Route::get('/game/view-add-game', [ManageGameController::class, 'view_add_game'])->middleware('admin');
Route::post('/game/add-game', [ManageGameController::class, 'add_game'])->middleware('admin');
// Form Update Game
Route::get('/game/edit', [ManageGameController::class, 'edit'])->name('game.edit')->middleware('admin');//view
Route::get('/game/view-update-game/{id}', [ManageGameController::class, 'view_update_game'])->middleware('admin');
Route::post('/game/update-game/{id}', [ManageGameController::class, 'update_game'])->middleware('admin');
Route::get('/game/delete-game/{id}', [ManageGameController::class, 'delete_game'])->middleware('admin');

//Add Review 
Route::post('/add/review/{id}/{name}',[ReviewController::class,'add']);
