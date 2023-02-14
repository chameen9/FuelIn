<?php

namespace App\Http\Controllers;

use App\Models\VehicleType;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Auth;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $email = Auth::user()->email;
        $FirstName = User::where('email',$email)->value('first_name');
        $LastName = User::where('email',$email)->value('last_name');
        $vehicles = Vehicle::all();
        //$vehicles = Vehicle::join('')
        $vehicleTypes = VehicleType::all();
    
        return view('headoffice.vehicles.index', compact('vehicles','vehicleTypes','email','FirstName','LastName'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehicles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'registration_number' => 'required|unique:vehicles',
            'Customer_ID' => 'required',
            'Vehicle_Type_ID' => 'required',
        ]);

        $vehicle = new Vehicle([
            'registration_number' => $request->get('registration_number'),
            'Customer_ID' => $request->get('Customer_ID'),
            'Vehicle_Type_ID' => $request->get('Vehicle_Type_ID'),
        ]);
        $vehicle->save();
        return redirect('/vehicles')->with('success', 'Vehicle has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicle = Vehicle::find($id);
        $vehicleType = VehicleType::where('Vehicle_Type_ID','=',$vehicle->Vehicle_Type_ID)->value('Type_Name');
        return redirect()->route('vehicles.index')->with(['uptodatevehicle'=>$vehicle,'VehicleType'=>$vehicleType]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       // echo $id;
        //echo $request->input('Vehicle_Number');
        $request->validate([
            'registration_number' => 'Vehicle_Number',
            //'Customer_ID' => 'required',
           // 'Vehicle_Type_ID' => 'required',
        ]);

        $vehicle = Vehicle::findOrFail($id);
        $vehicle->registration_number = $request->input('Vehicle_Number');
  
       // $vehicle->Customer_ID = $request->input('Customer_ID');
     //   $vehicle->Vehicle_Type_ID = $request->input('Vehicle_Type_ID');
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

