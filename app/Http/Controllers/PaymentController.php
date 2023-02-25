<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\FuelRequest;
use App\Models\FuelPrice;
use App\Models\Tokens;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function store(Request $request)
    {
        $payment = new Payment();
        $payment->Fuel_Request_ID = $request->fuel_request_id;
        $payment->Payment_Date = date('Y-m-d');
        date_default_timezone_set('Asia/Colombo');
        $currentTime = date('H:i:s');

        $payment->Payment_Time = $currentTime;
        $payment->Payment_Status_ID = 1; // Set the initial payment status to 'Pending'
        $payment->Amount = $request->amount;
        $payment->save();
    
        // Process the payment using the payment method details provided by the customer
        // ...
    
        // Update the payment status to 'Paid' if the payment was successful
        $payment->Payment_Status_ID = 2;
        $payment->save();
    
                // Find the token with the corresponding Fuel_Request_ID
        $token = Tokens::where('request_id', $request->fuel_request_id)->first();

        // Update the Payment_Status_ID to 2
        $token->update(['Payment_Status_ID' => 2]);
        return redirect()->route('payments.show', $payment->Payment_ID);
    }
    public function show(Request $request)
    {
        $email = Auth::user()->email;
        $FirstName = User::where('email',$email)->value('first_name');
        $LastName = User::where('email',$email)->value('last_name');
        $request = FuelRequest::find($request->Fuel_Request_ID);
        if (!$request) {
            // handle if fuel request is not found
        }

        $fuelPrice = FuelPrice::where('Fuel_Type_ID', $request->Fuel_Type_ID)->first();

        if (!$fuelPrice) {
            // handle if fuel price is not found
        }

        $pricePerLiter = $fuelPrice->Price;

        $amount = $pricePerLiter * $request->Requested_Liters;
//return $amount;
        return view('customers.payments.payment',[
            'request'=>$request,
            'price'=>$amount,
            'email'=>$email,
            'FirstName'=>$FirstName,
            'LastName'=>$LastName,
        ]);
    }

    
}
