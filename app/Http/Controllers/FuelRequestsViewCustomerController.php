<?php

namespace App\Http\Controllers;

use App\Models\FuelRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FuelRequestsViewCustomerController extends Controller
{
    public function index()
    {
        $customer_id = Auth::id();
        $fuelRequests = FuelRequest::select('fuel_request.*', 'fuel_type.Type_Name', 'fuel_stations.Fuel_Station_Name')
        ->join('fuel_type', 'fuel_request.Fuel_Type_ID', '=', 'fuel_type.Fuel_Type_ID')
        ->join('fuel_stations', 'fuel_request.Fuel_Station_ID', '=', 'fuel_stations.Fuel_Station_ID')
        ->where('Customer_ID', auth()->id())
        ->get();
      //  $fuelRequests = FuelRequest::where('Customer_ID', $customer_id)->get();
        return view('customers.all-fuel-requests', compact('fuelRequests'));
    }
}
