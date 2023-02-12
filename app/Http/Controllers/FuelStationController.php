<?php

namespace App\Http\Controllers;
use App\Models\FuelStation;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FuelStationController extends Controller
{
    public function index()
    {
        $email = Auth::user()->email;
        $FirstName = User::where('email',$email)->value('first_name');
        $LastName = User::where('email',$email)->value('last_name');
        $fuelstations = FuelStation::all();
    
        return view('headoffice.fuelstations.index', compact('fuelstations','email','FirstName','LastName'));
    }
    public function addnew(Request $request){
        $this->validate($request, [
            'Fuel_Station_Name'=>['required','string','max:200','min:1'],
            'Fuel_Station_Location'=>['required','string','max:200','min:3'],
            'Population_density'=>['required','integer'],
        ]);
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

    public function viewupdate($station_id){
        $email = Auth::user()->email;
        $uptodatestation = FuelStation::Where('Fuel_Station_ID',$station_id)->get();
        return view('headoffice.fuelstations.updatestation', compact('uptodatestation','email'));
        
    }
    public function update(Request $request){
        $uptodatestation = FuelStation::Where('Fuel_Station_ID',$request->input('Fuel_Station_ID'))
        ->update([
            'Fuel_Station_Name'=>$request->input('Fuel_Station_Name'),
            'Fuel_Station_Location'=>$request->input('Fuel_Station_Location'),
            'Scheduled_Delivery_Date'=>$request->input('Scheduled_Delivery_Date'),
            'Scheduled_Delivery_Time'=>$request->input('Scheduled_Delivery_Time'),
            'Population_density'=>$request->input('Population_density'),
        ]);
        return back()->with('success', 'Successfully updated...');
    }

    public function delete($station_id){
        $station = FuelStation::Where('Fuel_Station_ID',$station_id);
        $station->delete();
        return back()->with('success', 'Data has been deleted successfully!');
    }
}
