<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;

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

Route::any('/',[loginController::class,'index']);
Route::any('/register',[loginController::class,'register']);
Route::any('/dashbord',[loginController::class,'dashbord']);
Route::any('/logout',[loginController::class,'logout']);

