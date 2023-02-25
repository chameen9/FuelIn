<?php

use Illuminate\Support\Facades\Route;
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
    //return view('welcome');
    return view('login');
});

Route::post('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::get('/login', [App\Http\Controllers\LoginController::class,'showLoginForm'])->name('login');

Route::group(['middleware' => ['auth', 'head_office_auth']], function() {
    Route::get('/head_office_dashboard', [App\Http\Controllers\HeadOfficeDashboardController::class, 'index'])->name('head_office.dashboard');
    Route::get('/head_office_dashboard/vehicles/create', [VehicleController::class, 'create'])->name('head_office.vehicles.create');
    Route::get('/vehicles', [App\Http\Controllers\VehicleController::class, 'index'])->name('vehicles.index');

    //ashen new

    Route::get('/fuelprices', [App\Http\Controllers\FuelPriceController::class, 'index'])->name('fuelprices.index');
    Route::get('/fuelprices/create', [App\Http\Controllers\FuelPriceController::class, 'create'])->name('fuelprices.create');
    Route::post('/fuelprices', [App\Http\Controllers\FuelPriceController::class, 'store'])->name('fuelprices.store');
    Route::get('/fuelprices/{fuelPrice}/edit', [App\Http\Controllers\FuelPriceController::class, 'edit'])->name('fuelprices.edit');
    Route::put('/fuelprices', [App\Http\Controllers\FuelPriceController::class, 'update'])->name('fuelprices.update');
    Route::delete('/fuelprices/{fuelPrice}', [App\Http\Controllers\FuelPriceController::class, 'destroy'])->name('fuelprices.destroy');

   //oute::resource('fuelprices', 'App\Http\Controllers\FuelPriceController');

    Route::get('/head_office_dashboard', [App\Http\Controllers\HeadOfficeDashboardController::class, 'index'])->name('head_office.dashboard');
    Route::get('/head_office_dashboard/vehicles/create', [VehicleController::class, 'create'])->name('head_office.vehicles.create');
    Route::get('/vehicles', [App\Http\Controllers\VehicleController::class, 'index'])->name('vehicles.index');
    Route::get('/vehicles/create', [App\Http\Controllers\VehicleController::class, 'create'])->name('vehicles.create');
    //  Route::post('/vehicles', 'VehicleController@store')->name('vehicles.store');
    Route::get('/vehicles/{id}/edit', [App\Http\Controllers\VehicleController::class, 'edit'])->name('vehicles.edit');
    Route::post('/vehicles/{id}/edit', [App\Http\Controllers\VehicleController::class, 'edit'])->name('vehicles.edit');
    Route::patch('/vehicles/{id}',[App\Http\Controllers\VehicleController::class, 'update'])->name('vehicles.update');
    Route::delete('/vehicles/{id}', [App\Http\Controllers\VehicleController::class, 'destroy'])->name('vehicles.destroy');
    
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

    Route::get('/head_office_dashboard/fuel_quotas', [App\Http\Controllers\FuelQuotaController::class, 'index'])->name('fuelquotas.index');
    Route::get('/head_office_dashboard/fuelquotas/create', [App\Http\Controllers\FuelQuotaController::class, 'create'])->name('fuelquotas.create');
    Route::post('/head_office_dashboard/fuelquotas', [App\Http\Controllers\FuelQuotaController::class, 'store'])->name('fuelquotas.store');
    Route::get('/head_office_dashboard/fuelquotas/{id}', [App\Http\Controllers\FuelQuotaController::class, 'show'])->name('fuelquotas.show');
    Route::get('/head_office_dashboard/fuelquotas/{id}/edit', [App\Http\Controllers\FuelQuotaController::class, 'edit'])->name('fuelquotas.edit');
    Route::put('/head_office_dashboard/fuelquotas/{id}', [App\Http\Controllers\FuelQuotaController::class, 'update'])->name('fuelquotas.update');
    Route::delete('/head_office_dashboard/fuelquotas/{id}', [App\Http\Controllers\FuelQuotaController::class, 'destroy'])->name('fuelquotas.destroy');
    Route::get('/station/{id}/ownerupdate', [App\Http\Controllers\FuelStationController::class,'showOwnerUpdateForm'])->name('fuelstation.ownerupdate');
    Route::post('/station/{id}/ownerupdate', [App\Http\Controllers\FuelStationController::class, 'showOwnerUpdateForm'])->name('fuelstation.ownerupdate');
    Route::post('/station/{id}/updatemanager', [App\Http\Controllers\FuelStationController::class, 'updateManager'])->name('fuelstation.confirmUpdate');

 
    //end ashen new

    //chameen sandeepa
    Route::get('/fuelstations', [App\Http\Controllers\FuelStationController::class, 'index'])->name('fuelstations.index');
    Route::get('/register_new_vehicle_type', [HeadOfficeDashboardController::class, 'registerNewVehicleType'])->name('register_new_vehicle_type');
    Route::get('/logout_admin', [App\Http\Controllers\HeadOfficeDashboardController::class, 'logout'])->name('logout_admin');

    Route::post('/add_new_fuel_station', [App\Http\Controllers\FuelStationController::class, 'addnew'])->name('fuelstations.addnew');

    Route::post('/station/{station_id}/viewupdate', [App\Http\Controllers\FuelStationController::class, 'viewupdate'])->name('fuelstations.viewupdate');
    Route::get('/station/{station_id}/viewupdate', [App\Http\Controllers\FuelStationController::class, 'viewupdate'])->name('fuelstations.viewupdate');

    Route::post('/station/delete/{station_id}', [App\Http\Controllers\FuelStationController::class, 'delete'])->name('fuelstations.delete');
    Route::get('/station/delete/{station_id}', [App\Http\Controllers\FuelStationController::class, 'delete'])->name('fuelstations.delete');

    Route::post('/station/update', [App\Http\Controllers\FuelStationController::class, 'update'])->name('fuelstations.update');

    Route::get('/backinupdatestation', function () {
        return  route('fuelstations.index');
    });
      //new chameen sandeepa
      Route::delete('/head_office_dashboard/fuelorders/destroy/{id}', [App\Http\Controllers\HeadOfficeDashboardController::class, 'destroy'])->name('head_office_orders.destroy');
      Route::get('/head_office_dashboard/fuelorders/edit/{id}', [App\Http\Controllers\HeadOfficeDashboardController::class, 'edit'])->name('head_office_orders.edit');
      Route::post('/head_office_dashboard/fuelorders/edit/{id}', [App\Http\Controllers\HeadOfficeDashboardController::class, 'edit'])->name('head_office_orders.edit');
      Route::get('/head_office_dashboard/fuelorders/edit/decline/{id}', [App\Http\Controllers\HeadOfficeDashboardController::class, 'editDecline'])->name('head_office_orders.edit.decline');
      Route::post('/head_office_dashboard/fuelorders/edit/decline/{id}', [App\Http\Controllers\HeadOfficeDashboardController::class, 'editDecline'])->name('head_office_orders.edit.decline');
      Route::post('/head_office_dashboard/fuelorders/update/{id}', [App\Http\Controllers\HeadOfficeDashboardController::class, 'update'])->name('head_office_orders.update');
      Route::post('/head_office_dashboard/fuelorders/decline/{id}', [App\Http\Controllers\HeadOfficeDashboardController::class, 'decline'])->name('head_office_orders.decline');
      //end sandeepa
    //end chameen sandeepa

});


// driver login routes
Route::get('/defaultdriver', [App\Http\Controllers\DefaultDriver::class, 'index'])->name('defaultdriver.index');
Route::post('/updatelocation', [App\Http\Controllers\DefaultDriver::class, 'updatelocation'])->name('defaultdriver.updatelocation');

// end driver login routes


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
 //ashen
    Route::post('/payments', [App\Http\Controllers\PaymentController::class,'store'])->name('payments.store');
    Route::post('/payments/pay', [App\Http\Controllers\PaymentController::class,'show'])->name('payments.show');

    Route::get('/fuel-quotas', [App\Http\Controllers\CustomerController::class, 'customerFuelQuotas'])->name('customers.fuel-quotas');
    Route::post('/customer/request-fuel', [App\Http\Controllers\RequestFuelController::class, 'processFuelRequest'])->name('customer.request-fuel');
    Route::get('/customer/request-fuel', [App\Http\Controllers\RequestFuelController::class, 'showFuelRequestForm'])->name('customer.show-fuel-request-form');
    Route::get('/my-fuel-requests', [App\Http\Controllers\FuelRequestsViewCustomerController::class, 'index'])->name('customers.fuel-quotas-requests');

//ashen
    
});
Route::group(['middleware' => ['auth', 'petrol_station_manager']],function () {
    //ashen
    Route::get('/fuelstationdashboard',  [App\Http\Controllers\OrdersController::class, 'dashboard'])->name('fuel_station_dashboard');
    Route::get('/orders',  [App\Http\Controllers\OrdersController::class, 'index'])->name('orders.index');
    Route::get('/orders/create', [App\Http\Controllers\OrdersController::class, 'create'] )->name('orders.create');
    Route::post('/orders',  [App\Http\Controllers\OrdersController::class, 'store'] )->name('orders.store');
    Route::get('/orders/{order}',  [App\Http\Controllers\OrdersController::class, 'show'] )->name('orders.show');
    Route::get('/orders/{order}/edit', [App\Http\Controllers\OrdersController::class, 'edit'] )->name('orders.edit');
    Route::put('/orders/{order}',  [App\Http\Controllers\OrdersController::class, 'update'] )->name('orders.update');
    Route::delete('/orders/{order}', [App\Http\Controllers\OrdersController::class, 'destroy'])->name('orders.destroy'); 
    Route::get('/fuel-stocks', [App\Http\Controllers\FuelStockController::class, 'index'])->name('fuel-stocks.index');
    Route::get('/fuel-stocks/create', [App\Http\Controllers\FuelStockController::class, 'create'])->name('fuel-stocks.create');
    Route::post('/fuel-stocks', [App\Http\Controllers\FuelStockController::class, 'store'])->name('fuel-stocks.store');
    Route::get('/fuel-stocks/{id}/edit', [App\Http\Controllers\FuelStockController::class, 'edit'])->name('fuel-stocks.edit');
    Route::put('/fuel-stocks/{id}', [App\Http\Controllers\FuelStockController::class, 'update'])->name('fuel-stocks.update');
    Route::delete('/fuel-stocks/{id}', [App\Http\Controllers\FuelStockController::class, 'destroy'])->name('fuel-stocks.destroy');
    Route::get('/customer_fuel_requests', [App\Http\Controllers\CustomerMadeFuelRequestsController::class, 'index'])->name('fuel_requests.index');
    Route::post('/customer_fuel_requests/{id}/approve', [App\Http\Controllers\CustomerMadeFuelRequestsController::class, 'approve'])->name('fuel-requests.approve');
    Route::post('/customer_fuel_requests/{id}/decline', [App\Http\Controllers\CustomerMadeFuelRequestsController::class, 'decline'])->name('fuel-requests.decline');
    Route::post('/tokens/view/{request_id}', [App\Http\Controllers\TokenController::class, 'index'])->name('tokens.view');
    Route::get('/tokens/view/create', [App\Http\Controllers\TokenController::class, 'create'])->name('tokens.create');
    Route::post('/tokens/submit', [App\Http\Controllers\TokenController::class, 'store'])->name('tokens.store');
   
    Route::post('/tokens/new/save', [App\Http\Controllers\TokenController::class, 'save'])->name('tokens.save');

    //end ashen
});