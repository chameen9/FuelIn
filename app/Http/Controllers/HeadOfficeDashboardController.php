<?php

namespace App\Http\Controllers;


use App\Models\Delivery;
use App\Models\FuelRequest;
use Illuminate\Support\Facades\Auth;


class HeadOfficeDashboardController extends Controller
{
    /**
     * Show the head office dashboard view.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $fuelRequests = FuelRequest::all();
        $deliveries = Delivery::all();

        return view('headoffice.dashboard', compact('fuelRequests', 'deliveries'));
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
