<?php

namespace App\Http\Controllers;

use App\Models\FuelStation;
use App\Models\FuelType;
use Illuminate\Http\Request;
use App\Models\FuelStock;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FuelStockController extends Controller
{
    public function index()
    {
        $email = Auth::user()->email;
        $FirstName = User::where('email',$email)->value('first_name');
        $LastName = User::where('email',$email)->value('last_name');
        $user_id = auth()->user()->id;
        $fuelStocks = FuelStock::whereHas('fuelStation', function($query) use($user_id) {
            $query->where('owner_id', $user_id);
        })->get();
        return view('fuel_station.fuelstocks.index', compact('fuelStocks','email','FirstName','LastName'));
    }
    public function create()
    {
        $email = Auth::user()->email;
        $FirstName = User::where('email',$email)->value('first_name');
        $LastName = User::where('email',$email)->value('last_name');
        $user_id = auth()->user()->id;
        $fuelTypes = FuelType::all();
        $fuelStations = FuelStation::where('owner_id', $user_id)->get();
        return view('fuel_station.fuelstocks.create', compact('fuelTypes', 'fuelStations','email','FirstName','LastName'));
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'fuel_type_id' => 'required',
            //'fuel_station_id' => 'required',
            'liters' => 'required|numeric|min:0',
        ]);

        $existingStock = FuelStock::where('fuel_type_id', $request->fuel_type_id)
            ->where('station_id', $request->fuel_station_id)
            ->first();
        
        if ($existingStock) {
            $existingStock->liters += $request->liters;
            $existingStock->save();
        } else {
            $fuelStock = new FuelStock;
            $fuelStock->fuel_type_id = $request->fuel_type_id;
            $fuelStock->station_id = $request->fuel_station_id;
            $fuelStock->liters = $request->liters;
            $fuelStock->save();
        }

        return redirect()->route('fuel-stocks.index')->with('success', 'Fuel stock added successfully.');
    }

    // public function edit($id)
    // {
    //     $fuelStock = FuelStock::findOrFail($id);
    //     return view('fuel_station.fuelstocks.edit', compact('fuelStock'));
    // }
    public function edit($id)
    {
        $email = Auth::user()->email;
        $FirstName = User::where('email',$email)->value('first_name');
        $LastName = User::where('email',$email)->value('last_name');
        $fuelStock = FuelStock::find($id);
        $fuelTypes = FuelType::all();
        return view('fuel_station.fuelstocks.edit', [
            'fuelStock' => $fuelStock, 
            'fuelTypes' => $fuelTypes,
            'email' => $email,
            'FirstName' => $FirstName,
            'LastName' => $LastName,
        ]);
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'liters' => 'required|numeric|min:0',
        ]);

        $fuelStock = FuelStock::findOrFail($id);
        $fuelStock->liters = $request->liters;
        $fuelStock->save();

        return redirect()->route('fuel-stocks.index')->with('success', 'Fuel stock updated successfully.');
    }

    public function destroy($id)
    {
        $fuelStock = FuelStock::findOrFail($id);
        $fuelStock->delete();

        return redirect()->route('fuel-stocks.index')->with('success', 'Fuel stock deleted successfully.');
    }
}
