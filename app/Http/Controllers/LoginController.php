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
        $this->validate($request, [
            'email'=>['required','email','max:100','min:1'],
            'password'=>['string','max:100','min:1'],
        ]);

        $email = $request["email"];
        $password = $request["password"];
        $user = User::where('email', $email)->first();
     
        if(!empty($user)) {
             
            if ($user["password"] == $password) {
                $user_type = DB::table('user_types')->select('type')->where('id', '=', $user['user_type_id'])->get();
                if (!empty($user_type)) {
                $decoded = json_decode($user_type);
                $type = $decoded[0]->type;
                    if ($type == 'head_office_user') {
                        
                        Auth::login($user);
                        Auth::user()->userType()->associate($user->userType);
                        Auth::user()->save();
                        
                        if (Auth::check()) {
                            $userType = $user->userType->type;
                            return redirect()->route('head_office.dashboard');
                            // The user is logged in...
                        }
                    }
                    elseif ($type == 'driver') {
                        
                        Auth::login($user);
                        Auth::user()->userType()->associate($user->userType);
                        Auth::user()->save();
                        
                        if (Auth::check()) {
                            $userType = $user->userType->type;
                            //echo "Driver";
                            return redirect()->route('defaultdriver.index');
                            // The user is logged in...
                        }
                    }
                } 
                else {
                    return back()->with('error','Error !');
                }
            } 
            else {
                return back()->with('error','Email or password is incorrect !');
            }
        } 
        else {
            return back()->with('error','Invalid login !');
        }
    }
}
