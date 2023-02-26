<?php

namespace App\Http\Controllers;

use App\Models\FuelRequest;
use App\Models\FuelType;
use App\Models\Tokens;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TokenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $email = Auth::user()->email;
        $FirstName = User::where('email',$email)->value('first_name');
        $LastName = User::where('email',$email)->value('last_name');
        $tokens = Tokens::all();
        return view('fuel_station.tokens.index', compact('tokens','request','email','FirstName','LastName'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
      */
    // public function create(Request $request)
    // {
    //     $fuel_request_id = $request->Fuel_Request_ID;
    //     $fuelRequest = FuelRequest::where('Fuel_Request_ID', $fuel_request_id)->first();

    //     return $fuel_request_id;
    //   //  return view('fuel_station.tokens.create', ['fuelRequest' => $fuelRequest,'request'=>$request]);

       
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->Fuel_Request_ID;
        $email = Auth::user()->email;
        $FirstName = User::where('email',$email)->value('first_name');
        $LastName = User::where('email',$email)->value('last_name');
        $fuel_request_id = $request->Fuel_Request_ID;
        $fuelRequest = FuelRequest::where('Fuel_Request_ID', $fuel_request_id)->first();
        $fuelTypes = FuelType::all();
        //return $fuel_request_id;
        return view('fuel_station.tokens.create', [
            'fuelRequest' => $fuelRequest,
            'request'=>$request,
            'fuelTypes'=>$fuelTypes,
            'email'=>$email,
            'FirstName'=>$FirstName,
            'LastName'=>$LastName,
        ]);

       
        // $token = new Token;
        // $token->Customer_ID = $request->Customer_ID;
        // $token->Payment_Status_ID = $request->Payment_Status_ID;
        // $token->Fuel_Type_ID = $request->Fuel_Type_ID;
        // $token->Liters = $request->Liters;
        // $token->Scheduled_Filling_Time = $request->Scheduled_Filling_Time;
        // $token->Scheduled_Filling_Date = $request->Scheduled_Filling_Date;
        // $token->request_id = $request->request_id;
        // $token->save();

        // return redirect()->route('tokens.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $token = Tokens::find($id);
        return view('tokens.show', ['token' => $token]);
    }
    public function save(Request $request)
    {
       // return $request;
      //  return "hi";
        // Validate the form data
        $validatedData = $request->validate([
            'scheduled_filling_time' => 'required',
            'scheduled_filling_date' => 'required',
            
            'tolerance_hours' => 'required|integer',
        ]);

        // Create a new token record
        $token = new Tokens;
        $token->customer_id = $request->input('customer_id');
        $token->payment_status_id = $request->input('payment_status_id');
        $token->fuel_type_id = $request->fuel_type_id;
       // return $request->fuel_type_id;
        $token->liters = $request->input('liters');
        $token->scheduled_filling_time = $validatedData['scheduled_filling_time'];
        $token->scheduled_filling_date = $validatedData['scheduled_filling_date'];
        $token->request_id = $request->input('request_id');
        $token->save();

        // Update tolerance_hours in Fuel_Request table
        $fuelRequest = FuelRequest::where('Fuel_Request_ID',$request->input('request_id'))->first();
       $fuelRequest->Tolerance_Hours = $validatedData['tolerance_hours'];
       $fuelRequest->Scheduled_Filling_Date = $validatedData['scheduled_filling_date'];
       $fuelRequest->Scheduled_Filling_Time = $validatedData['scheduled_filling_time'];
     
        $fuelRequest->save();
        return redirect()->route('fuel_requests.index');
      //return redirect()->back()->with('success', 'Token created successfully.');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $token = Tokens::find($id);
        return view('tokens.edit', ['token' => $token]);
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
        $token = Tokens::find($id);
        $token->Customer_ID = $request->Customer_ID;
        $token->Payment_Status_ID = $request->Payment_Status_ID;
        $token->Fuel_Type_ID = $request->Fuel_Type_ID;
        $token->Liters = $request->Liters;
        $token->Scheduled_Filling_Time = $request->Scheduled_Filling_Time;
        $token->Scheduled_Filling_Date = $request->Scheduled_Filling_Date;
        $token->request_id = $request->request_id;
        $token->save();

        return redirect()->route('tokens.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $token = Tokens::find($id);
        $token->delete();

        return redirect()->route('tokens.index');
    }
}