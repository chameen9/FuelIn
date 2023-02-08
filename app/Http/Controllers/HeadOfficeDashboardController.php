<?php

namespace App\Http\Controllers;


use App\Models\Delivery;
use App\Models\FuelRequest;
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

        $fuelRequests = FuelRequest::all();
        $deliveries = Delivery::all();

        return view('headoffice.dashboard', compact('fuelRequests', 'deliveries','email'));
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('/login');
    }
}
