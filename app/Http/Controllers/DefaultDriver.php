<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Driver;
use App\Models\Delivery;
use App\Models\FuelStation;
use App\Models\DeliveryStatus;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use DB;

class DefaultDriver extends Controller
{
    public function index(){
        $email = Auth::user()->email;
        $FirstName = User::where('email',$email)->value('first_name');
        $LastName = User::where('email',$email)->value('last_name');
        $thisDriverId = Driver::where([['first_name',$FirstName],['last_name',$LastName]])->value('driver_id');
        $DeliveryId = Delivery::where('driver_id',$thisDriverId)->value('id');
        $fuel_station_id = Delivery::where('id',$DeliveryId)->value('fuel_station_id');
        $fuel_station_name = FuelStation::where('Fuel_Station_ID',$fuel_station_id)->value('Fuel_Station_Name');
        $fuel_station_location = FuelStation::where('Fuel_Station_ID',$fuel_station_id)->value('Fuel_Station_Location');
        $liters_requested = Delivery::where('id',$DeliveryId)->value('liters_requested');
        $fuel_type_id = Delivery::where('id',$DeliveryId)->value('fuel_type');
        $fuel_type = DB::table('fuel_type')->where('Fuel_Type_ID',$fuel_type_id)->value('Type_Name');
        $status = DB::table('delivery_status')->where('delivery_id',$DeliveryId)->value('status');
        $current_location = DB::table('delivery_status')->where('delivery_id',$DeliveryId)->value('current_location');
        $progress_value = DB::table('delivery_status')->where('delivery_id',$DeliveryId)->value('progress_value');

        return view('driver.index', compact(
            'email',
            'FirstName',
            'LastName',
            'thisDriverId',
            'DeliveryId',
            'fuel_station_id',
            'fuel_station_name',
            'fuel_station_location',
            'liters_requested',
            'fuel_type',
            'status',
            'current_location',
            'progress_value'
        ));

    }
    public function updatelocation(Request $request){
        $currentlocation = DB::table('delivery_status')->where([
            ['delivery_id',$request->input('delivery_id')],
            ['current_location',$request->input('old_location')]
            ])->update([
                'current_location'=>$request->input('current_location'),
                'progress_value'=>$request->input('progress_value')
            ]);
        if($currentlocation){
            return redirect()->route('defaultdriver.index')->with('success', 'Successfully updated...');
        }
        else{
            return redirect()->route('defaultdriver.index')->with('error', 'not found...');
        }
    }
}
