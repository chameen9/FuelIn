<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vehicle;
use App\Models\VehicleType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerVehiclesController extends Controller
{
    public function index()
    {
        $user = User::where('email',  auth()->user()->email)->first();
       
        if ($user) {
            $userId = $user->id;
            $vehicles = Vehicle::where('Customer_ID', $userId)->get();
            // return view('customers.vehicles.index', compact('vehicles'));
     
             return view('customers.vehicles.index', [
                 'vehicles' => $vehicles
             ]);
        } else {
            return "error vehicle list showing";
            // return error message or redirect to a different page
        }
        //$customerId = Auth::guard('customer')->user()->id;
      
    }

    public function create()
    {
        $vehicleTypes = VehicleType::all();
        return view('customers.vehicles.create', compact('vehicleTypes'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        //get user id
        $userId = $user->id;
    //   // Get the current datetime
    //     $currentDatetime = date('Y-m-d H:i:s');

    //     // Add 7 days to the current datetime
    //     $futureDatetime = date('Y-m-d H:i:s', strtotime($currentDatetime . ' +7 days'));

    //     // Store the future datetime in a variable
    //     $futureDatetimeVariable = $futureDatetime;
        $vehicle = new Vehicle;
        $vehicle->registration_number = $request->registration_number;
        $vehicle->Customer_ID = $userId;
        $vehicle->Vehicle_Type_ID = $request->vehicle_type_id;
        //$vehicle->fuel_reset_date = $futureDatetimeVariable;
        $vehicle->save();

        return redirect()->route('customers.vehicles.index');
    }

    public function edit($id)
    {
        $vehicle = Vehicle::find($id);

        $vehicleTypes = VehicleType::all();


        return view('customers.vehicles.edit', compact('vehicle', 'vehicleTypes'));
    }

    public function update(Request $request, $id)
    {
     //   echo "hi";
        $vehicle = Vehicle::find($id);
        $vehicle->registration_number = $request->Vehicle_Number;
      //  $vehicle->Customer_ID = $request->Customer_ID;
        $vehicle->Vehicle_Type_ID = $request->Vehicle_Type_ID;
        $vehicle->save();

        return redirect()->route('customers.vehicles.index');
    }

    public function destroy($id)
    {
        $vehicle = Vehicle::find($id);
        $vehicle->delete();

        return redirect()->route('customers.vehicles.index');
    }
}

