<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class LoginController extends Controller
{
    function checklogin(Request $request){
        $this->validate($request, [
            'Username'=>['required','string','max:100','min:1'],
            'Password'=>['string', 'string','max:100','min:1'],
        ]);

        $reqUsername = $request->input('Username');
        $reqPassword = $request->input('Password');
        $gotUsername = DB::Table('users')->where('username',$reqUsername)->value('Username');
        $gotPassword = DB::Table('users')->where('username',$reqUsername)->value('Password');
        $userRole = DB::Table('users')->where('Username',$reqUsername)->value('Usertype');

        if($gotUsername==$reqUsername){
            if($gotPassword==$reqPassword){

                return view('index',[
                    'username'=>$reqUsername,
                    'userLastName'=>$reqUsername,
                    'userFirstName'=>$reqUsername,
                    'userRole'=>$userRole,
                    'userLevel'=>null,
                    'userLevelName'=>null,
                    'todokanbancards'=>[],
                    'activekanbancards'=>[],
                    'inreviewkanbancards'=>[],
                    'userdepartment'=>null,
                ]); 
                   
            }
            else{
                return back()->with('error','Invalid Password. Try again !');
            }
        }
        else{
            return back()->with('error','Unkonown user !');
        }
    }
    function signout(Request $request){
        Session::flush();
        
        Auth::logout();

        return view('login');
    }
}
