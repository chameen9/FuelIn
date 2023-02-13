<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerVehiclesController extends Controller
{
    public function index()
    {
        return view('customers.vehicles.index');
    }
}
