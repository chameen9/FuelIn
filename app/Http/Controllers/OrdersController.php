<?php

namespace App\Http\Controllers;

use App\Models\FuelStation;
use App\Models\FuelType;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    public function dashboard(){
        $email = Auth::user()->email;
        $FirstName = User::where('email',$email)->value('first_name');
        $LastName = User::where('email',$email)->value('last_name');
        return view('fuel_station.dashboard',compact('email','FirstName','LastName'));
    }
    public function index()
    {
        $email = Auth::user()->email;
        $FirstName = User::where('email',$email)->value('first_name');
        $LastName = User::where('email',$email)->value('last_name');
        $orders = Order::all();
        return view('fuel_station.orders.index', compact('orders','email','FirstName','LastName'));
    }

    public function create()
    {
        $email = Auth::user()->email;
        $FirstName = User::where('email',$email)->value('first_name');
        $LastName = User::where('email',$email)->value('last_name');
        $fuelTypes = FuelType::all();
        $user = Auth::user();
        $fuelStations = FuelStation::where('owner_id', $user->id)->get();
       // return view('fuel_stations.select', compact('fuelStations'));
        return view('fuel_station.orders.create', [
            'fuelTypes' => $fuelTypes,
            'fuelStations' => $fuelStations,
            'email'=>$email,
            'FirstName'=>$FirstName,
            'LastName'=>$LastName,
        ]);
       
    }

    public function store(Request $request)
    {
        Order::create($request->all());
        return redirect()->route('orders.index');
    }

    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        return view('orders.edit', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $order->update($request->all());
        return redirect()->route('orders.index');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index');
    }
}
