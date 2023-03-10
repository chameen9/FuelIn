<?php

namespace App\Http\Controllers;

use App\Models\FuelStation;
use App\Models\FuelType;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\StationRequest;
use DB;

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
        $StationID = $request->input('Fuel_Station_ID');
        $FuelStationName = DB::Table('fuel_stations')->where('Fuel_Station_ID',$request->input('Fuel_Station_ID'))->value('Fuel_Station_Name');
        $FuelTypeName = DB::Table('fuel_type')->where('Fuel_Type_ID',$request->input('Fuel_Type_ID'))->value('Type_Name');
        $details = [
            'Title'=>'New order has been received.',
            'FuelStation'=>$FuelStationName,
            'FuelType'=>$FuelTypeName,
            'Liters'=>$request->input('liters_quantity'),
        ];
        $users = DB::table('users')->where('user_type_id', 1)->get();
        foreach ($users as $user) {
            Mail::to($user->email)->send(new StationRequest($details));
        }

        return redirect()->route('orders.index');
    }

    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        return redirect()->route('orders.index')->with([
            'uptodateOrder'=>$order
        ]);
    }

    public function update(Request $request, Order $order)
    {
        $order->update($request->all());
        return redirect()->route('orders.index')->with('success','Order Updated !');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index')->with('success','Order Deleted !');
    }
}
