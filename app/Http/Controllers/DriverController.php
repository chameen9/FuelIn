<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the drivers.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivers = Driver::all();
        return view('headoffice.drivers.index', compact('drivers'));
    }

    /**
     * Show the form for creating a new driver.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('headoffice.drivers.create');
    }

    /**
     * Store a newly created driver in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'driver_license_number' => 'required|unique:driver',
            'phone_number' => 'required',
            'address' => 'required',
            'date_of_birth' => 'required',
        ]);

        $driver = new Driver([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'driver_license_number' => $request->get('driver_license_number'),
            'phone_number' => $request->get('phone_number'),
            'address' => $request->get('address'),
            'date_of_birth' => $request->get('date_of_birth'),
        ]);
        $driver->save();
        return redirect('/drivers')->with('success', 'Driver has been added');
    }

    /**
     * Display the specified driver.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $driver = Driver::find($id);
        return view('headoffice.drivers.show', compact('driver'));
    }

    /**
     * Show the form for editing the specified driver.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $driver = Driver::find($id);
        return view('headoffice.drivers.edit', compact('driver'));
    }

    /**
     * Update the specified driver in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $driver = Driver::find($id);
        $driver->first_name = $request->input('first_name');
        $driver->last_name = $request->input('last_name');
        $driver->driver_license_number = $request->input('driver_license_number');
        $driver->phone_number = $request->input('phone_number');
        $driver->address = $request->input('address');
        $driver->date_of_birth = $request->input('date_of_birth');
        $driver->save();
        return redirect()->route('drivers.index')->with('success', 'Driver information updated successfully.');
    }
    
    public function destroy($id)
    {
        $driver = Driver::find($id);
        $driver->delete();

        return redirect()->route('drivers.index')->with('success', 'Driver deleted successfully!');
    }
}
