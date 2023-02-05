<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        $user = new User();
        $user->setName("Ashen");
        $user->setEmail("ashen@coffee.com");
        echo $user->getName();
        echo '\n';
        echo $user->getEmail();




        
        return view('headoffice.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        // validate the credentials against the database
        // and log the user in if successful

        // return to the dashboard if successful
        //return redirect()->route('headoffice.dashboard');

        // return back to the login page with errors if unsuccessful
        return back()->withErrors(['message' => 'Incorrect login details']);
    }
}
class User
{
    private $name;
    private $email;
    // public function __construct($name, $email)
    // {
    //     $this->name = $name;
    //     $this->email = $email;
    // }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
}
