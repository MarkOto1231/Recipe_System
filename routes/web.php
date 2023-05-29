<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//---------------------------Login-Register---------------------------//
                             //Register//
Route::get('/create', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store'])->name('register');
                              //Login//
Route::get('/', [LoginController::class, 'index']);
Route::post('/check', [LoginController::class, 'check'])-> name ('check');
                              //Logout//
Route::get('/logout', [LogoutController::class,'logout'])-> name('logout');

//---------------------------Login-Register---------------------------//


//---------------------------Recipe-List---------------------------//
Route::resource("/check/recipe-list",RecipeController::class);
Route::get('/check/search', [RecipeController::class, 'index']);
Route::get('/check/dashboard', [RecipeController::class, 'dashboard']);
//---------------------------Recipe-List---------------------------//