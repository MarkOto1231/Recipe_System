<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
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

//---------------------------Login-Register---------------------------//


//---------------------------Recipe-List---------------------------//
Route::resource("/check/recipe-list",RecipeController::class);
//---------------------------Recipe-List---------------------------//