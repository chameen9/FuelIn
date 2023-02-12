<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }
    public function login(Request $request)
    {
       // echo "hi";
      //  $credentials = $request->only(['email', 'password']);

       
        // if (Auth::attempt($request->only($credentials['email'],$credentials['password']))) {
        //     // Authentication was successful...
        //     echo "hi";
        // } else {
        //     echo "bad";
        // }

        $email = $request["email"];
        $password = $request["password"];
         //return $username;
         $user = User::where('email', $email)->first();
     
         if(!empty($user)) {
             
            if ($user["password"] == $password) {
                $user_type = DB::table('user_types')->select('type')->where('id', '=', $user['user_type_id'])->get();
                //UserType::where('id', $user['user_type_id']);
               if (!empty($user_type)) {
                $decoded = json_decode($user_type);
               $type = $decoded[0]->type;
                    if ($type == 'head_office_user') {
                        
                        Auth::login($user);
                        Auth::user()->userType()->associate($user->userType);
                        Auth::user()->save();
                        
                        if (Auth::check()) {
                            $userType = $user->userType->type;
                            //echo Auth::user()->userType->type;
                            return redirect()->route('head_office.dashboard');
                            // The user is logged in...
                        }
                                    //return redirect()->route('head_office.dashboard');
                    }
                    if ($type == 'end_customer') {
                        
                        Auth::login($user);
                        Auth::user()->userType()->associate($user->userType);
                        Auth::user()->save();
                        
                        if (Auth::check()) {
                            $userType = $user->userType->type;
                            //echo Auth::user()->userType->type;
                            return redirect()->route('customer_dashboard');
                            // The user is logged in...
                        }
                                    //return redirect()->route('head_office.dashboard');
                    }
               // echo $type; 
                   // echo json_decode($user_type)->type;
                   // echo $user_type;
                    // if ($user_type["type"] == 'head_office_user') {
                    //     echo "is admin";
                    // } else {
                    //     echo "not admin";
                    // }
                 } else {
                     echo "error";
                 }
                // session(['user' => ['type' => 'admin', 'id' => $user["ID"]] ]);
                // $user = User::find($head_office_login["ID"]);
                // $user = session('user', false);
                //      if ($user) {
                //          echo "authentication success";
                //      }

                //  } else {
                //      echo "Password incorrect";
                //  }
            } else {
                echo "Email or password is incorrect";
            }
            
         } else {
            echo "Invalid login";
        }

        //return back()->withInput()->withErrors(['email' => 'The provided credentials are incorrect.']);
    }
}
