<?php

use App\Http\Controllers\CartController;
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
Route::get('/register', [LoginController::class,'tampilanRegister'])->middleware('guest');
Route::post('/register', [LoginController::class,'Register']);
Route::get('/login', [LoginController::class,'tampilanLogin'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'Login']);
Route::get('/logout', [LoginController::class,'Logout'])->middleware('auth');

//Dashboard
Route::get('/', [DashboardController::class, 'index']);
//Search
Route::get('/dashboard/search', [DashboardController::class, 'search']);
//GameDetail
Route::get('gamedetail/{id}', [GameDetailController::class, 'index'])->name('gameDetail');

//Manage Category
//Form Create Category
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create')->middleware('auth','admin');
Route::post('/category', [CategoryController::class, 'store'])->name('category.store')->middleware('auth','admin');
// Form Update Category 
Route::get('/category/edit', [CategoryController::class, 'edit'])->name('category.edit')->middleware('auth','admin');//view
Route::get('/category/view-update/{id}', [CategoryController::class, 'viewupdate'])->middleware('auth','admin');
Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update')->middleware('auth','admin');
Route::get('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy')->middleware('auth','admin');

//Manage Game
//Form Add Game 
Route::get('/game/view-add-game', [ManageGameController::class, 'view_add_game'])->middleware('auth','admin');
Route::post('/game/add-game', [ManageGameController::class, 'add_game'])->middleware('auth','admin');
// Form Update Game
Route::get('/game/edit', [ManageGameController::class, 'edit'])->name('game.edit')->middleware('auth','admin');//view
Route::get('/game/view-update-game/{id}', [ManageGameController::class, 'view_update_game'])->middleware('auth','admin');
Route::post('/game/update-game/{id}', [ManageGameController::class, 'update_game'])->middleware('auth','admin');
Route::get('/game/delete-game/{id}', [ManageGameController::class, 'delete_game'])->middleware('auth','admin');

//Add Review 
Route::post('/add/review/{id}/{name}',[ReviewController::class,'add'])->middleware('auth');

//Cart
Route::get('/cart', [CartController::class, 'index'])->name('cart')->middleware('auth');
Route::get('/cart/add/{id}', [CartController::class, 'store'])->middleware('auth'); 
Route::get('/cart/remove/{id}', [CartController::class, 'remove'])->middleware('auth');
Route::get('/cart/checkout', [CartController::class, 'checkout'])->middleware('auth');