<?php

namespace App\Http\Controllers;


use App\Models\VehicleType;
use Illuminate\Http\Request;

class VehicleTypeController extends Controller
{
    public function index()
    {
        $vehicleTypes = VehicleType::all();

        return view('headoffice.vehicles.types.index', compact('vehicleTypes'));
    }

    public function create()
    {
        return view('headoffice.vehicles.types.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Type_Name' => 'required',
            'Description' => 'required',
        ]);

        VehicleType::create($request->all());

        $vehicleTypes = VehicleType::all();

        return view('headoffice.vehicles.types.index', compact('vehicleTypes'));
       
    }

    public function edit(VehicleType $vehicleType)
    {
        return view('headoffice.vehicles.types.edit', compact('vehicleType'));
    }

    public function update(Request $request, VehicleType $vehicleType)
    {
        $request->validate([
            'Type_Name' => 'required',
            'Description' => 'required',
        ]);

        $vehicleType->update($request->all());
        $vehicleTypes = VehicleType::all();

        return view('headoffice.vehicles.types.index', compact('vehicleTypes'));
       

       // return redirect()->route('vehicle_types')
                       // ->with('success','Vehicle type updated successfully.');
    }

    public function destroy(VehicleType $vehicleType)
    {
        $vehicleType->delete();
        return redirect()->route('vehicle_types.index');

     //   return redirect()->route('vehicle_types')
                     //   ->with('success','Vehicle type deleted successfully.');
      //$vehicleTypes = VehicleType::all();

   //  return view('headoffice.vehicles.types.index', compact('vehicleTypes'));
                    
    }
}
