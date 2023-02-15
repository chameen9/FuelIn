<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FuelQuota;
use App\Models\VehicleType;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class FuelQuotaController extends Controller
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
        $fuelquotas = FuelQuota::all();
        $vehicle_types = VehicleType::all();
        return view('headoffice.fuelquotas.index', compact('fuelquotas','email','FirstName','LastName','vehicle_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vehicle_types = VehicleType::all();
        return view('headoffice.fuelquotas.create', compact('vehicle_types'));
        // no need this
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
         //   'Vehicle_Type_ID' => 'required',
            'liters_amount' => 'required'
        ]);
  
        try {
            FuelQuota::create($request->all());

            return redirect()->route('fuelquotas.index')
            ->with('success','Fuel Quota created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', "You can't assign quota twice for same vehicle type");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fuelQuota = FuelQuota::find($id);
        return view('headoffice.fuelquotas.show', compact('fuelQuota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fuel_quota = FuelQuota::find($id);
        $vehicle_types = VehicleType::all();
        //return view('headoffice.fuelquotas.edit', compact('fuel_quota', 'vehicle_types'));
        return redirect()->route('fuelquotas.index')->with(['fuel_quota' => $fuel_quota,'vehicle_types'=>$vehicle_types]);
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
        $fuelQuota = FuelQuota::findOrFail($id);
    
        $this->validate($request, [
           
            'liters_amount' => 'required|numeric'
        ]);
    
      
        $fuelQuota->liters_amount = $request->liters_amount;
        $fuelQuota->save();
    
        return redirect()->route('fuelquotas.index')->with('success', 'Fuel quota updated successfully');
    }
    public function destroy($id)
    {
        $fuelQuota = FuelQuota::find($id);
        $fuelQuota->delete();
    
        return redirect()->route('fuelquotas.index')
            ->with('success','Fuel Quota deleted successfully');
    }
    
}    