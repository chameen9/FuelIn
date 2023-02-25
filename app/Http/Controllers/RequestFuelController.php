<?php

namespace App\Http\Controllers;

use App\Models\CustomerVehicleFuelQuota;
use App\Models\FuelRequest;
use App\Models\FuelStation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\FuelType;
use App\Models\FuelStock;
use App\Models\FuelRequestToken;
use App\Models\Vehicle;
class RequestFuelController extends Controller
{
    public function showFuelRequestForm()
    {
        $fuelTypes = FuelType::all();
        $user = Auth::user();
        $fuelStations = FuelStation::all();
        $vehicles = Vehicle::where('Customer_ID', $user->id)->get();
        
        return view('customers.request-fuel', ['fuelTypes' => $fuelTypes, 'vehicles' => $vehicles, 'fuelStations' => $fuelStations]);
    }
    public function processFuelRequest(Request $request)
    {
        $vehicleId = $request->input('vehicle_id');
        $fuelTypeId = $request->input('fuel_type_id');
        $fuelStationId = $request->input('station_id');
        $liters = $request->input('liters_required');

       // return $fuelStationId;
  
        $quota = CustomerVehicleFuelQuota::where('customer_id', auth()->id())
            ->where('vehicle_id', $vehicleId)
          
            ->first();

        if ($quota && $liters > $quota->remaining_liters) {
            echo "You cannot request more fuel than your remaining quota.";
            //return back()->with('error', 'You cannot request more fuel than your remaining quota.');
        }

        $fuelStock = FuelStock::where('fuel_type_id', $fuelTypeId)->where('station_id', $fuelStationId)
            ->first();

 
        if (!$fuelStock || $liters > $fuelStock->liters) {
            return 'Fuel stock not available for this request.';
         //   return back()->with('error', 'Fuel stock not available for this request.');
        }
       // return  auth()->id();

        $fuelRequest = new FuelRequest;
        $fuelRequest->Customer_ID = auth()->id();
        $vehicle = Vehicle::find($vehicleId);
        $registration_number = $vehicle->registration_number;
        //return $registration_number;
        $fuelRequest->Vehicle_Registration_Number = $registration_number;
        $fuelRequest->Fuel_Type_ID = $fuelTypeId;
        $fuelRequest->Fuel_Station_ID = $fuelStationId;
        $fuelRequest->Requested_Liters = $liters;
        $fuelRequest->status = 'Pending';
        $fuelRequest->save();
        // Find the customer_vehicle_fuel_quota record for the selected vehicle id
        $quota = CustomerVehicleFuelQuota::where('vehicle_id', $request->vehicle_id)->first();

     

        // Calculate the remaining liters after deducting the requested liters
        $remainingLiters = $quota->remaining_liters - $request->liters_required;

      //s  echo $remainingLiters;
        // Update the remaining_liters column in the database
        $quota->update(['remaining_liters' => $remainingLiters]);

        //$token = FuelRequestToken::generateToken($fuelRequest);

       // return back()->with('success', 'Your fuel request has been successfully submitted. Your token is ' . $token->token . ', and you can expect to receive your fuel ' . $token->expected_delivery_time . ' with a tolerance of 3 hours.');
    }

    // public function requestFuel(Request $request)
    // {
    //     $this->validate($request, [
    //         'registration_number' => 'required',
    //         'fuel_type' => 'required',
    //     ]);

    //     $fuelType = FuelType::find($request->fuel_type);

    //     if (!$fuelType) {
    //         return redirect()->back()->with('message', 'Invalid fuel type selected.');
    //     }

    //     $fuelStock = FuelStock::where('fuel_type_id', $request->fuel_type)
    //                 ->where('fuel_station_id', Auth::user()->fuel_station_id)
    //                 ->where('quantity', '>', 0)
    //                 ->orderBy('updated_at', 'asc')
    //                 ->first();

    //     if (!$fuelStock) {
    //         return redirect()->back()->with('message', 'We do not have fuel of the requested type at the moment. Please try again later.');
    //     }

    //     $deliveryTime = $this->calculateExpectedDeliveryTime($fuelStock);

    //     $token = FuelRequestToken::create([
    //         'registration_number' => $request->registration_number,
    //         'fuel_type_id' => $request->fuel_type,
    //         'fuel_stock_id' => $fuelStock->id,
    //         'expected_delivery_time' => $deliveryTime,
    //     ]);

    //     return redirect()->back()->with('token', $token);
    // }

    private function calculateExpectedDeliveryTime(FuelStock $fuelStock)
    {
        $fuelingTime = $fuelStock->fuel_station->fueling_time_per_vehicle;

        $currentTime = Carbon::now();
        $expectedDeliveryTime = $currentTime->addMinutes($fuelingTime)->format('d/m/Y h:i:s A');

        return $expectedDeliveryTime;
    }
}
