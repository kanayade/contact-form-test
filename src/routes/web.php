<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

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

Route::get('auth/register',[AuthController::class,'index']);
Route::get('/login',[AuthController::class,'login']);
Route::get('/admin',[AuthController::class,'index']);
// Route::middleware('auth')->group(function () {
//     Route::get('/',[AuthController::class,'index']);
// });


Route::get('/',[ContactController::class,'create']);
Route::post('/confirm',[ContactController::class,'confirm']);
Route::post('/thanks',[ContactController::class,'store']);

Route::get('auth/admin',[AdminController::class,'index']);