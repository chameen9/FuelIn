<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\UserModelCreate;

use App\Models\UserType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CustomerController extends Controller
{
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
