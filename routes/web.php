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
    
    //ashen new
    
    Route::get('/vehicles/create', [App\Http\Controllers\VehicleController::class, 'create'])->name('vehicles.create');
    //Route::post('/vehicles', 'VehicleController@store')->name('vehicles.store');
    Route::get('/vehicles/{id}/edit', [App\Http\Controllers\VehicleController::class, 'edit'])->name('vehicles.edit');
    Route::patch('/vehicles/{id}',[App\Http\Controllers\VehicleController::class, 'update'])->name('vehicles.update');
    Route::delete('/vehicles/{id}', [App\Http\Controllers\VehicleController::class, 'destroy'])->name('vehicles.destroy');
      
    Route::get('/register-vehicle', [App\Http\Controllers\RegisterVehicleController::class, 'index'])->name('vehicles.create');
    Route::post('/register-vehicle', [App\Http\Controllers\RegisterVehicleController::class, 'store'])->name('vehicles.store');
  
    Route::get('vehicle_types', [App\Http\Controllers\VehicleTypeController::class, 'index'])->name('vehicle_types.index');
    Route::get('vehicle_types/create', [App\Http\Controllers\VehicleTypeController::class, 'create'])->name('vehicle_types.create');
    Route::post('vehicle_types', [App\Http\Controllers\VehicleTypeController::class, 'store'])->name('vehicle_types.store');
    Route::get('vehicle_types/{vehicleType}/edit', [App\Http\Controllers\VehicleTypeController::class, 'edit'])->name('vehicle_types.edit');
    Route::patch('vehicle_types/{vehicleType}', [App\Http\Controllers\VehicleTypeController::class, 'update'])->name('vehicle_types.update');
    Route::delete('vehicle_types/{vehicleType}', [App\Http\Controllers\VehicleTypeController::class, 'destroy'])->name('vehicle_types.destroy');
      
    Route::get('/head_office_dashboard', [App\Http\Controllers\HeadOfficeDashboardController::class, 'index'])->name('head_office.dashboard');
    Route::get('/head_office_dashboard/vehicles/create', [VehicleController::class, 'create'])->name('head_office.vehicles.create');
    Route::get('/vehicles', [App\Http\Controllers\VehicleController::class, 'index'])->name('vehicles.index');

    //end ashen new

    //sandeepa
    Route::get('/fuelstations', [App\Http\Controllers\FuelStationController::class, 'index'])->name('fuelstations.index');
    Route::get('/register_new_vehicle_type', [HeadOfficeDashboardController::class, 'registerNewVehicleType'])->name('register_new_vehicle_type');
    Route::get('/logout_admin', [App\Http\Controllers\HeadOfficeDashboardController::class, 'logout'])->name('logout_admin');

    Route::post('/add_new_fuel_station', [App\Http\Controllers\FuelStationController::class, 'addnew'])->name('fuelstations.addnew');

    Route::post('/station/viewupdate/{station_id}', [App\Http\Controllers\FuelStationController::class, 'viewupdate'])->name('fuelstations.viewupdate');
    Route::get('/station/viewupdate/{station_id}', [App\Http\Controllers\FuelStationController::class, 'viewupdate'])->name('fuelstations.viewupdate');

    Route::post('/station/delete/{station_id}', [App\Http\Controllers\FuelStationController::class, 'delete'])->name('fuelstations.delete');
    Route::get('/station/delete/{station_id}', [App\Http\Controllers\FuelStationController::class, 'delete'])->name('fuelstations.delete');

    Route::post('/station/update', [App\Http\Controllers\FuelStationController::class, 'update'])->name('fuelstations.update');

    Route::get('/backinupdatestation', function () {
        return  route('fuelstations.index');
    });
    //end sandeepa
});

