<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\VehicleType;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class VehicleController extends Controller
{
    
    public function store(Request $request)
    {
        $request->validate([
            'registration_number' => 'required|unique:vehicles',
            'Customer_ID' => 'required',
            'Vehicle_Type_ID' => 'required',
        ]);

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
        $FirstName = User::where('email',$email)->value('first_name');
        $LastName = User::where('email',$email)->value('last_name');
        //$vehicles = Vehicle::all();
        $vehicles = Vehicle::join('vehicle_type','vehicle_type.Vehicle_Type_ID','=','vehicles.Vehicle_Type_ID')
                            ->select(
                                'vehicles.id',
                                'vehicles.registration_number',
                                'vehicles.Customer_ID',
                                'vehicles.Vehicle_Type_ID',
                                'vehicles.updated_at',
                                'vehicles.created_at',
                                'vehicle_type.Type_Name',)
                            ->get();
        $vehicleTypes = VehicleType::all();
    
        return view('headoffice.vehicles.index', compact('vehicles','vehicleTypes','email','FirstName','LastName'));
    }

    public function create()
    {
        return view('vehicles.create');
    }

    public function edit($id)
    {
        $vehicle = Vehicle::find($id);
        $vehicleType = VehicleType::where('Vehicle_Type_ID','=',$vehicle->Vehicle_Type_ID)->value('Type_Name');
        return redirect()->route('vehicles.index')->with(['uptodatevehicle'=>$vehicle,'VehicleType'=>$vehicleType]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'registration_number' => 'required',
        ]);

        $vehicle = Vehicle::findOrFail($id);
        $vehicle->registration_number = $request->input('registration_number');

        $vehicle->save();
        return redirect()->route('vehicles.index')->with('success', 'Vehicle updated successfully');
    }
       
    public function destroy($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->delete();
       
       return redirect()->route('vehicles.index')
                         ->with('success','Vehicle deleted successfully');
    }
}
