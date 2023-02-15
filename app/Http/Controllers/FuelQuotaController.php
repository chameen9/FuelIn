<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FuelQuota;

class FuelQuotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "dfgdf";
        // $fuelQuotas = FuelQuota::all();
        // return view('headoffice.fuelquotas.index', compact('fuelQuotas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fuelQuotas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Vehicle_Type_ID' => 'required',
            'liters_amount' => 'required'
        ]);
  
        FuelQuota::create($request->all());
   
        return redirect()->route('fuelQuotas.index')
                        ->with('success','Fuel Quota created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fuelQuota = FuelQuota::find($id);
        return view('headoffice.fuelquotas.show', compact('fuelQuota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fuelQuota = FuelQuota::find($id);
        return view('headoffice.fuelquotas.edit', compact('fuelQuota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fuelQuota = FuelQuota::findOrFail($id);
    
        $this->validate($request, [
            'Vehicle_Type_ID' => 'required',
            'liters_amount' => 'required|numeric'
        ]);
    
        $fuelQuota->Vehicle_Type_ID = $request->Vehicle_Type_ID;
        $fuelQuota->liters_amount = $request->liters_amount;
        $fuelQuota->save();
    
        return redirect()->route('fuelquotas.index')->with('success', 'Fuel quota updated successfully');
    }
    public function destroy($id)
    {
        $fuelQuota = FuelQuota::find($id);
        $fuelQuota->delete();
    
        return redirect()->route('fuelQuotas.index')
            ->with('success','Fuel Quota deleted successfully');
    }
    
}    