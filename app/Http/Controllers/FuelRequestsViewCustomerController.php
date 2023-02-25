<?php

namespace App\Http\Controllers;

use App\Models\FuelRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tokens;
use App\Models\User;
class FuelRequestsViewCustomerController extends Controller
{
  public function index()
  {
    $email = Auth::user()->email;
    $FirstName = User::where('email',$email)->value('first_name');
    $LastName = User::where('email',$email)->value('last_name');
      $customer_id = Auth::id();
      $fuelRequests = FuelRequest::select('fuel_request.*', 'fuel_type.Type_Name', 'fuel_stations.Fuel_Station_Name')
          ->join('fuel_type', 'fuel_request.Fuel_Type_ID', '=', 'fuel_type.Fuel_Type_ID')
          ->join('fuel_stations', 'fuel_request.Fuel_Station_ID', '=', 'fuel_stations.Fuel_Station_ID')
          ->where('Customer_ID', auth()->id())
          ->get();

          foreach ($fuelRequests as $request) {
            $token = Tokens::where('request_id', $request->Fuel_Request_ID)->first();
            
            if (!empty($token->Payment_Status_ID) && $token->Payment_Status_ID == 2) {
              $request->payment_status_id = 2;
              $request->payment_button = false;
             } 
            if (!$token || in_array($token->Payment_Status_ID, [1, 3])) {
              
                $request->payment_button = true;
            }
            
            if ($request->status != 'Approved') {
                
                $request->payment_button = false;
            }
        }
        
      return view('customers.all-fuel-requests', compact('fuelRequests','email','FirstName','LastName'));
  }

}
