<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\VehicleType;
use Illuminate\Support\Facades\Auth;
class VehicleController extends Controller
{
    
    public function store(Request $request)
    {
        $vehicle = new Vehicle;
        $vehicle->registration_number = $request->registration_number;
        $vehicle->Customer_ID = $request->Customer_ID;
        $vehicle->Vehicle_Type_ID = $request->Vehicle_Type_ID;
        $vehicle->save();
    
        return redirect()->route('vehicles.index');
    }
    public function index()
    {
        $email = Auth::user()->email;
        $vehicles = Vehicle::all();
        //$vehicles = Vehicle::join('')
        $vehicleTypes = VehicleType::all();
    
        return view('headoffice.vehicles.index', compact('vehicles','vehicleTypes','email'));
    }
    
}
