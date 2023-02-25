<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FuelType;
use App\Models\FuelPrice;

class FuelPriceController extends Controller
{
    public function index()
    {
        $fuelTypes = FuelType::all();
        $fuelPrices = FuelPrice::all();
        return view('headoffice.prices.index', compact('fuelTypes', 'fuelPrices'));
    }

    public function create()
    {
        $fuelTypes = FuelType::all();
        return view('headoffice.prices.create', compact('fuelTypes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'fuel_type_id' => 'required|integer|unique:FuelPrice',
            'price' => 'required|numeric',
        ]);

        $fuelPrice = new FuelPrice();
        $fuelPrice->fuel_type_id = $request->fuel_type_id;
        $fuelPrice->price = $request->price;
        $fuelPrice->save();

        return redirect()->route('fuelprices.index')->with('success', 'Fuel price added successfully.');
    }

    public function edit(FuelPrice $fuelPrice)
    {
        $fuelTypes = FuelType::all();
        return view('headoffice.prices.edit', compact('fuelTypes', 'fuelPrice'));
    }

    public function update(Request $request, FuelPrice $fuelPrice)
    {
        $request->validate([
               'price' => 'required|numeric',
        ]);
        $fuelPrice = FuelPrice::findOrFail($request->id);
        //return $request->id;
        $fuelPrice->Fuel_Type_ID = $request->id;
        $fuelPrice->Price = $request->price;
        $fuelPrice->save();
    
        return redirect()->route('fuelprices.index')->with('success', 'Fuel price updated successfully');
    }

    public function destroy(FuelPrice $fuelPrice)
    {
        $fuelPrice->delete();
        return redirect()->route('fuelprices.index')->with('success', 'Fuel price deleted successfully.');
    }
}
