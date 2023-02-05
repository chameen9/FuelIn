<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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
//routes/web.php
//Route::get('/headoffice/login', [App\Http\Controllers\AdminLoginController::class,'showLoginForm'])->name('headoffice.login');
//Route::post('/headoffice/login',  [App\Http\Controllers\AdminLoginController::class,'login'])->name('headoffice.login.submit');
//Route::get('/headoffice/dashboard', [AdminLoginController::class, 'dashboard'])->name('headoffice.dashboard');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::get('/login', [App\Http\Controllers\LoginController::class,'showLoginForm'])->name('login');
