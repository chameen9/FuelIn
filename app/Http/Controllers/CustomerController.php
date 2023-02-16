<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\CustomerVehicleFuelQuota;
use App\Models\FuelQuota;
use App\Models\User;
use App\Models\UserModelCreate;

use App\Models\UserType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CustomerController extends Controller
{

//all methods after customer sigin

    public function dashboard()
    {
        $email = Auth::user()->email;
        $FirstName = User::where('email',$email)->value('first_name');
        $LastName = User::where('email',$email)->value('last_name');
        return view('customers.dashboard',compact('email','FirstName','LastName'));
    }

    public function customerFuelQuotas()
    {
        
        $customer_id = Auth::user()->id;
        $customer = Customer::with('vehicles.vehicleType.fuelQuota')->find($customer_id);
    // Loop through each vehicle belonging to the customer
    foreach ($customer->vehicles as $vehicle) {
        $vehicle_id = $vehicle->id;

        // Check if a row already exists in the customer_vehicle_fuel_quota table for this vehicle
        $fuel_quota = CustomerVehicleFuelQuota::where('vehicle_id', $vehicle_id)->first();

        if (!$fuel_quota) {
            // If a row does not exist, create a new row with default values
            $fuel_quota = new CustomerVehicleFuelQuota;
            $fuel_quota->customer_id = $customer_id;
            $fuel_quota->vehicle_id = $vehicle_id;
            $fuel_quota->Fuel_Quota_ID = FuelQuota::where('vehicle_type_id', $vehicle->Vehicle_Type_ID)->value('Fuel_Quota_ID');

            $fuel_quota->remaining_liters = $vehicle->vehicleType->fuelQuota->liters_amount;
          //  $fuel_quota->remaining_reset_date = date('Y-m-d', strtotime('next ' . $vehicle->vehicleType->fuelQuota->fuel_reset_day));
            $fuel_quota->save();
        }

            // Check if the remaining liters need to be reset
            $fuel_reset_day = $vehicle->vehicleType->fuelQuota->fuel_reset_day;
            //return $fuel_reset_day;
            if (date('l') == $fuel_reset_day) {
                //echo "equals";
                // Reset the remaining liters and reset date
                $fuel_quota->remaining_liters = $vehicle->vehicleType->fuelQuota->liters_amount;
               // $fuel_quota->remaining_reset_date = date('Y-m-d', strtotime('next ' . $fuel_reset_day));
                $fuel_quota->save();
            }else{
               // echo "no equals";
            }
 
    }
       return view('customers.fuel-quotas', compact('customer'));
    }
    
//end after customer sigin

    public function create()
    {
        return view('customers.create');
    }
    
    public function store(Request $request)
    {

        //validate the form data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
          
            'contact_number' => 'required|string|max:255',
            'national_identity_number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);
       
        //get user type with type 'end_customer'
        $userType = UserType::where('type', 'end_customer')->first();
    
        //create a new user
        $user = UserModelCreate::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'user_type_id' => $userType->id
        ]);
    //bcrypt(
        //create a new customer
        $customer = Customer::create([
            'Customer_ID' => $user->id,
          
            'contact_number' => $request->input('contact_number'),
            'national_identity_number' => $request->input('national_identity_number'),
            'address' => $request->input('address')
        ]);
    
      
        //login the user
        //Auth::login($user);
    

        //redirect the user to home page
        return redirect()->route('login')->with('success', 'Sign up successful, welcome to FuelIn!');
    }
    
}
