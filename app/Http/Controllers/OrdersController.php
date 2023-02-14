<?php

namespace App\Http\Controllers;

use App\Models\FuelStation;
use App\Models\FuelType;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('fuel_station.orders.index', compact('orders'));
    }

    public function create()
    {
        $fuelTypes = FuelType::all();
        $user = Auth::user();
        $fuelStations = FuelStation::where('owner_id', $user->id)->get();
       // return view('fuel_stations.select', compact('fuelStations'));
        return view('fuel_station.orders.create', [
            'fuelTypes' => $fuelTypes,
            'fuelStations' => $fuelStations,

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
