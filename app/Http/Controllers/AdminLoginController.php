<?php

namespace App\Http\Controllers;

use App\Delivery;
use App\FuelRequest;
use App\Models\HeadOfficeLogin;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('headoffice.login');
    }
    public function dashboard()
    {
        // Retrieve all deliveries and fuel requests from the database
        $deliveries = Delivery::all();
        $fuel_requests = FuelRequest::all();
    
        return view('headoffice.dashboard', compact('deliveries', 'fuel_requests'));
    }
    
    public function login(Request $request)
    {
      // $credentials = $request->only(['username', 'password']);
       $username = $request["username"];
       $password = $request["password"];
        //return $username;
        $head_office_login = HeadOfficeLogin::where('Username', $username)->first();
        if(!empty($head_office_login)) {
            // echo "success";
            if ($head_office_login["Password"] == $request["password"]) {
           
            session(['user' => ['type' => 'admin', 'id' => $head_office_login["ID"]] ]);
           // $user = User::find($head_office_login["ID"]);
           $user = session('user', false);
                if ($user) {
                    echo "authentication success";
                }
            
            } else {
                echo "Password incorrect";
            }
        } else {
            echo "Invalid login";
        }
        //echo $head_office_login["Username"];
        // if (!$head_office_login || !Hash::check($password, $head_office_login->password)) {
        //     echo "error";
        //    // return back()->withErrors(['message' => 'Incorrect login details']);

        // } else {
        //     echo "success";
        // }
      //   return redirect()->route('headoffice.dashboard');
    }
}
