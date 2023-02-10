<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\VehicleType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterVehicleController extends Controller
{
    public function create()
    {
     
       
    }
    public function index()
    {
        $vehicleTypes = VehicleType::all();
        return view('headoffice.vehicles.create', compact('vehicleTypes'));
    }
    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'registration_number' => 'required|unique:vehicles',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Vehicle::create([
            'registration_number' => $request->input('registration_number'),
            'Vehicle_Type_ID' => $request->Vehicle_Type_ID,
        ]);
    
        return redirect()->route('vehicles.index')->with('success','Vehicle added !');
    }
}
