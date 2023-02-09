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
Route::group(['middleware' => ['auth', 'head_office_auth']], function() {
    Route::get('/head_office_dashboard', [App\Http\Controllers\HeadOfficeDashboardController::class, 'index'])->name('head_office.dashboard');
    Route::get('/head_office_dashboard/vehicles/create', [VehicleController::class, 'create'])->name('head_office.vehicles.create');
    Route::get('/vehicles', [App\Http\Controllers\VehicleController::class, 'index'])->name('vehicles.index');
    Route::get('/register-vehicle', [App\Http\Controllers\RegisterVehicleController::class, 'index'])->name('vehicles.create');

    Route::get('vehicle_types', [App\Http\Controllers\VehicleTypeController::class, 'index']);
    Route::get('vehicle_types/create', [App\Http\Controllers\VehicleTypeController::class, 'create']);
    Route::post('vehicle_types', [App\Http\Controllers\VehicleTypeController::class, 'store']);
    Route::get('vehicle_types/{vehicleType}/edit', [App\Http\Controllers\VehicleTypeController::class, 'edit']);
    Route::post('vehicle_types/{vehicleType}', [App\Http\Controllers\VehicleTypeController::class, 'update']);
    Route::delete('vehicle_types/{vehicleType}', [App\Http\Controllers\VehicleTypeController::class, 'destroy']);
    

});

Route::get('/register_new_vehicle_type', [HeadOfficeDashboardController::class, 'registerNewVehicleType'])->name('register_new_vehicle_type');
Route::get('/logout_admin', [App\Http\Controllers\HeadOfficeDashboardController::class, 'logout'])->name('logout_admin');
