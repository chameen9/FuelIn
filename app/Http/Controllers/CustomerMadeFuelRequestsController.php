<?php

namespace App\Http\Controllers;

use App\Models\FuelRequest;
use Illuminate\Http\Request;

class CustomerMadeFuelRequestsController extends Controller
{
    public function approve(Request $request, $id)
    {
        $fuelRequest = FuelRequest::findOrFail($id);
        $fuelRequest->status = 'Approved';
        $fuelRequest->save();

        return redirect()->back()->with('success', 'Fuel request approved successfully.');
    }
    public function index()
    {
        //$customer_id = Auth::id();
        $fuelRequests = FuelRequest::select('fuel_request.*', 'fuel_type.Type_Name', 'fuel_stations.Fuel_Station_Name')
        ->join('fuel_type', 'fuel_request.Fuel_Type_ID', '=', 'fuel_type.Fuel_Type_ID')
        ->join('fuel_stations', 'fuel_request.Fuel_Station_ID', '=', 'fuel_stations.Fuel_Station_ID')
       
        ->get();
      //  $fuelRequests = FuelRequest::where('Customer_ID', $customer_id)->get();
        return view('fuel_station.customer-request', compact('fuelRequests'));
    }
    public function decline(Request $request, $id)
    {
        $fuelRequest = FuelRequest::findOrFail($id);
        $fuelRequest->status = 'Declined';
        $fuelRequest->save();

        return redirect()->back()->with('success', 'Fuel request declined successfully.');
    }
}
