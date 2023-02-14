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
     
        $vehicle = new Vehicle;
        $vehicle->registration_number = $request->registration_number;
        $vehicle->Customer_ID = $userId;
        $vehicle->Vehicle_Type_ID = $request->vehicle_type_id;
        $vehicle->save();

        return redirect()->route('customers.vehicles.index');
    }

    public function edit($id)
    {
        $vehicle = Vehicle::find($id);

        return view('customers.vehicles.edit', [
            'vehicle' => $vehicle
        ]);
    }

    public function update(Request $request, $id)
    {
        $vehicle = Vehicle::find($id);
        $vehicle->registration_number = $request->registration_number;
        $vehicle->Customer_ID = $request->Customer_ID;
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

