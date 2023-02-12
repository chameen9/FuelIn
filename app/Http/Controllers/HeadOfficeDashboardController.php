<?php

namespace App\Http\Controllers;


use App\Models\Delivery;
use App\Models\FuelRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class HeadOfficeDashboardController extends Controller
{
    /**
     * Show the head office dashboard view.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {

        $email = Auth::user()->email;
        $FirstName = User::where('email',$email)->value('first_name');
        $LastName = User::where('email',$email)->value('last_name');

        $fuelRequests = FuelRequest::all();
        $deliveries = Delivery::all();

        return view('headoffice.dashboard', compact('fuelRequests', 'deliveries','email','FirstName','LastName'));
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('/login');
    }
}