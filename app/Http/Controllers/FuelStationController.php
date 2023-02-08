<?php

namespace App\Http\Controllers;
use App\Models\FuelStation;

use Illuminate\Http\Request;

class FuelStationController extends Controller
{
    public function index()
    {
        $fuelstations = FuelStation::all();
    
        return view('headoffice.fuelstations.index', compact('fuelstations'));
    }
    public function addnew(Request $request){
        
        $fuelstation = new FuelStation;
        $fuelstation->Fuel_Station_ID = $request->Fuel_Station_ID;
        $fuelstation->Fuel_Station_Name = $request->Fuel_Station_Name;
        $fuelstation->Fuel_Station_Location = $request->Fuel_Station_Location;
        $fuelstation->Scheduled_Delivery_Date = $request->Scheduled_Delivery_Date;
        $fuelstation->Scheduled_Delivery_Time = $request->Scheduled_Delivery_Time;
        $fuelstation->Population_density = $request->Population_density;
        $fuelstation->save();

        return back();        
    }
}
