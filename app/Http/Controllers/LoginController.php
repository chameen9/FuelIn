<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class LoginController extends Controller
{
    function checklogin(Request $request){
        $this->validate($request, [
            'Email'=>['required','email','max:100','min:1'],
            'Password'=>['string', 'string','max:100','min:1'],
        ]);

        $reqEmail = $request->input('Email');
        $reqPassword = $request->input('Password');
        $gotEmail = DB::Table('users')->where('email',$reqEmail)->value('email');
        $gotPassword = DB::Table('users')->where('email',$reqEmail)->value('password');
        $userRole = DB::Table('users')->where('email',$reqEmail)->value('user_type_id');

        if($gotEmail==$reqEmail){
            if($gotPassword==$reqPassword){

                return view('index',[
                    'username'=>$reqEmail,
                    'userLastName'=>$reqEmail,
                    'userFirstName'=>$reqEmail,
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
