<?php

namespace App\Http\Controllers;


use App\Models\VehicleType;
use Illuminate\Http\Request;
use Carbon\Carbon;

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

        $vehicleType = new VehicleType;
        $vehicleType->Type_Name = $request->input('Type_Name');
        $vehicleType->Description = $request->input('Description');
        $vehicleType->updated_at = Carbon::Now('Asia/Colombo');
        $vehicleType->created_at = Carbon::Now('Asia/Colombo');
        $vehicleType->save();

        //VehicleType::create($request->all());

        //$vehicleTypes = VehicleType::all();

        return back()->with('success','Vehicle type added !');
       
    }

    public function edit(VehicleType $vehicleType)
    {
        //return view('headoffice.vehicles.types.edit', compact('vehicleType'));
        return back()->with('vehicleType',$vehicleType);
    }

    public function update(Request $request, VehicleType $vehicleType)
    {
        $request->validate([
            'Type_Name' => 'required',
            'Description' => 'required',
        ]);

        $vehicleType->update($request->all());
        $vehicleTypes = VehicleType::all();

        return back()->with('success','Vehicle Type updated !');
        //return redirect()->route('vehicle_types.index');

     //   return view('headoffice.vehicles.types.index', compact('vehicleTypes'));
       

       // return redirect()->route('vehicle_types')
                       // ->with('success','Vehicle type updated successfully.');
    }

    public function destroy(VehicleType $vehicleType)
    {
        $vehicleType->delete();
        return back()->with('success','Vehicle Type deleted !');
        //return redirect()->route('vehicle_types.index');

     //   return redirect()->route('vehicle_types')
                     //   ->with('success','Vehicle type deleted successfully.');
      //$vehicleTypes = VehicleType::all();

   //  return view('headoffice.vehicles.types.index', compact('vehicleTypes'));
                    
    }
}
