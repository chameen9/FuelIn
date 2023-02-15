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
    Route::get('/headoffice/head_office_dashboard', [App\Http\Controllers\HeadOfficeDashboardController::class, 'index'])->name('head_office.dashboard');
    Route::get('/headoffice/head_office_dashboard/vehicles/create', [VehicleController::class, 'create'])->name('head_office.vehicles.create');
    Route::get('/headoffice/vehicles', [App\Http\Controllers\VehicleController::class, 'index'])->name('vehicles.index');
    Route::get('/headoffice/vehicles/create', [App\Http\Controllers\VehicleController::class, 'create'])->name('vehicles.create');
  //  Route::post('/vehicles', 'VehicleController@store')->name('vehicles.store');
    Route::get('/headoffice/vehicles/{id}/edit', [App\Http\Controllers\VehicleController::class, 'edit'])->name('vehicles.edit');
    Route::patch('/headoffice/vehicles/{id}',[App\Http\Controllers\VehicleController::class, 'update'])->name('vehicles.update');
    Route::delete('/headoffice/vehicles/{id}', [App\Http\Controllers\VehicleController::class, 'destroy'])->name('vehicles.destroy');
    
    Route::get('/register-vehicle', [App\Http\Controllers\RegisterVehicleController::class, 'index'])->name('vehicles.create');
    Route::post('/register-vehicle', [App\Http\Controllers\RegisterVehicleController::class, 'store'])->name('vehicles.store');

    Route::get('/drivers', [App\Http\Controllers\DriverController::class, 'index'])->name('drivers.index');
    Route::get('/drivers/create',  [App\Http\Controllers\DriverController::class, 'create'])->name('drivers.create');
    Route::post('/drivers', [App\Http\Controllers\DriverController::class, 'store'])->name('drivers.store');
    Route::get('/drivers/{driver_id}', [App\Http\Controllers\DriverController::class, 'show'])->name('drivers.show');
    Route::get('/drivers/{driver_id}/edit', [App\Http\Controllers\DriverController::class, 'edit'])->name('drivers.edit');
    Route::put('/drivers/{driver_id}', [App\Http\Controllers\DriverController::class, 'update'])->name('drivers.update');
    Route::delete('/drivers/{driver_id}',[App\Http\Controllers\DriverController::class, 'destroy'])->name('drivers.destroy');
    

    Route::get('vehicle_types', [App\Http\Controllers\VehicleTypeController::class, 'index'])->name('vehicle_types.index');
    Route::get('vehicle_types/create', [App\Http\Controllers\VehicleTypeController::class, 'create'])->name('vehicle_types.create');
    Route::post('vehicle_types', [App\Http\Controllers\VehicleTypeController::class, 'store'])->name('vehicle_types.store');
    Route::get('vehicle_types/{vehicleType}/edit', [App\Http\Controllers\VehicleTypeController::class, 'edit'])->name('vehicle_types.edit');
    Route::patch('vehicle_types/{vehicleType}', [App\Http\Controllers\VehicleTypeController::class, 'update'])->name('vehicle_types.update');
    Route::delete('vehicle_types/{vehicleType}', [App\Http\Controllers\VehicleTypeController::class, 'destroy'])->name('vehicle_types.destroy');
    
        Route::get('/head_office_dashboard', [App\Http\Controllers\HeadOfficeDashboardController::class, 'index'])->name('head_office.dashboard');
    Route::get('/head_office_dashboard/vehicles/create', [VehicleController::class, 'create'])->name('head_office.vehicles.create');
    Route::get('/vehicles', [App\Http\Controllers\VehicleController::class, 'index'])->name('vehicles.index');
    
    Route::get('/logout_admin', [App\Http\Controllers\HeadOfficeDashboardController::class, 'logout'])->name('logout_admin');

    Route::get('/register_new_vehicle_type', [HeadOfficeDashboardController::class, 'registerNewVehicleType'])->name('register_new_vehicle_type');
    Route::get('/head_office_dashboard/fuel_quotas', [FuelQuotaController::class, 'index'])->name('fuelquotas.index');
    Route::get('/head_office_dashboard/fuelquotas/create', [FuelQuotaController::class, 'create'])->name('fuelquotas.create');
    Route::post('/head_office_dashboard/fuelquotas', [FuelQuotaController::class, 'store'])->name('fuelquotas.store');
    Route::get('/head_office_dashboard/fuelquotas/{id}', [FuelQuotaController::class, 'show'])->name('fuelquotas.show');
    Route::get('/head_office_dashboard/fuelquotas/{id}/edit', [FuelQuotaController::class, 'edit'])->name('fuelquotas.edit');
    Route::put('/head_office_dashboard/fuelquotas/{id}', [FuelQuotaController::class, 'update'])->name('fuelquotas.update');
    Route::delete('/head_office_dashboard/fuelquotas/{id}', [FuelQuotaController::class, 'destroy'])->name('fuelquotas.destroy');
    

    //end ashen

    //sandeepa
    Route::get('/fuelstations', [App\Http\Controllers\FuelStationController::class, 'index'])->name('fuelstations.index');
  
Route::get('/fuelstations', [App\Http\Controllers\FuelStationController::class, 'index'])->name('fuelstations.index');

Route::post('/add_new_fuel_station', [App\Http\Controllers\FuelStationController::class, 'addnew'])->name('fuelstations.addnew');

Route::post('/station/viewupdate/{station_id}', [App\Http\Controllers\FuelStationController::class, 'viewupdate'])->name('fuelstations.viewupdate');
Route::get('/station/viewupdate/{station_id}', [App\Http\Controllers\FuelStationController::class, 'viewupdate'])->name('fuelstations.viewupdate');

Route::post('/station/delete/{station_id}', [App\Http\Controllers\FuelStationController::class, 'delete'])->name('fuelstations.delete');
Route::get('/station/delete/{station_id}', [App\Http\Controllers\FuelStationController::class, 'delete'])->name('fuelstations.delete');

Route::post('/station/update', [App\Http\Controllers\FuelStationController::class, 'update'])->name('fuelstations.update');

Route::get('/backinupdatestation', function () {
    return  route('fuelstations.index');
});;

//end sandeepa
Route::get('/register_new_vehicle_type', [HeadOfficeDashboardController::class, 'registerNewVehicleType'])->name('register_new_vehicle_type');
Route::get('/logout_admin', [App\Http\Controllers\HeadOfficeDashboardController::class, 'logout'])->name('logout_admin');

});


//customers signup route
Route::get('/signup', [App\Http\Controllers\CustomerController::class, 'create'])->name('customer_signup_form');

Route::post('/signup',[App\Http\Controllers\CustomerController::class, 'store'])->name('customers.store');

Route::group(['middleware' => ['auth', 'end_customer']],function () {
    Route::get('/dashboard', [App\Http\Controllers\CustomerController::class, 'dashboard'])->name('customer_dashboard');
    Route::get('/dashboard/vehicles', [App\Http\Controllers\CustomerVehiclesController::class, 'index'])->name('customers.vehicles.index');
   // Route::get('/vehicles', 'CustomerVehiclesController@index')->name('customers.vehicles.index');
    Route::get('/vehicles/create', [App\Http\Controllers\CustomerVehiclesController::class, 'create'])->name('customers.vehicles.create');
    Route::post('/vehicles', [App\Http\Controllers\CustomerVehiclesController::class, 'store'])->name('customers.vehicles.store');
    Route::get('/vehicles/{id}/edit',[App\Http\Controllers\CustomerVehiclesController::class, 'edit'] )->name('customers.vehicles.edit');
    Route::patch('/customers/vehicles/{id}', [App\Http\Controllers\CustomerVehiclesController::class, 'update'])->name('customers.vehicles.update');
    Route::delete('/customers/vehicles/{id}', [App\Http\Controllers\CustomerVehiclesController::class, 'destroy'])->name('customers.vehicles.destroy');

    
});
Route::group(['middleware' => ['auth', 'petrol_station_manager']],function () {
    Route::get('/orders',  [App\Http\Controllers\OrdersController::class, 'index'])->name('orders.index');
    Route::get('/orders/create', [App\Http\Controllers\OrdersController::class, 'create'] )->name('orders.create');
    Route::post('/orders',  [App\Http\Controllers\OrdersController::class, 'store'] )->name('orders.store');
    Route::get('/orders/{order}',  [App\Http\Controllers\OrdersController::class, 'show'] )->name('orders.show');
    Route::get('/orders/{order}/edit', [App\Http\Controllers\OrdersController::class, 'edit'] )->name('orders.edit');
    Route::put('/orders/{order}',  [App\Http\Controllers\OrdersController::class, 'update'] )->name('orders.update');
    Route::delete('/orders/{order}', [App\Http\Controllers\OrdersController::class, 'destroy'])->name('orders.destroy');
    
    
});
