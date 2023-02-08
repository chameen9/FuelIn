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
        $this->validate($request, [
            'Fuel_Station_ID'=>['required','integer'],
            'Fuel_Station_Name'=>['required','string','max:200','min:1'],
            'Fuel_Station_Location'=>['required','string','max:200','min:3'],
            'Scheduled_Delivery_Date'=>['required','date'],
            'Scheduled_Delivery_Time'=>['required'],
            'Population_density'=>['required','integer'],
        ]);
        $station_id = $request->input('Fuel_Station_ID');
        $existing_id = FuelStation::Where('Fuel_Station_ID',$station_id)->get();
        if ($existing_id){
            return back()->with('error', 'ID  Already Exists !.');
        }
        else{
            $fuelstation = new FuelStation;
            $fuelstation->Fuel_Station_ID = $request->Fuel_Station_ID;
            $fuelstation->Fuel_Station_Name = $request->Fuel_Station_Name;
            $fuelstation->Fuel_Station_Location = $request->Fuel_Station_Location;
            $fuelstation->Scheduled_Delivery_Date = $request->Scheduled_Delivery_Date;
            $fuelstation->Scheduled_Delivery_Time = $request->Scheduled_Delivery_Time;
            $fuelstation->Population_density = $request->Population_density;
            $saved = $fuelstation->save();
    
            if ($saved) {
                return back()->with('success', 'Fuel station details have been saved successfully!');
            } else {
                return back()->with('error', 'An error occurred while saving the fuel station details.');
            }    
        }
    }
}
