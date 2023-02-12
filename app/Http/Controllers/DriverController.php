<?php

namespace App\Http\Controllers;


use App\Models\Driver;
use Illuminate\Http\Request;


class DriverController extends Controller
{
    public function index()
    {
        $drivers = Driver::all();
        return view('headoffice.drivers.index', compact('drivers'));
    }

    public function create()
    {
        return view('headoffice.drivers.create');
    }

    public function store(Request $request)
    {
        $driver = new Driver;
        $driver->Name = $request->Name;
        $driver->License_No = $request->License_No;
        $driver->Contact_No = $request->Contact_No;
        $driver->save();

        return redirect()->route('drivers.index')->with('success', 'Driver added successfully!');
    }

    public function show($id)
    {
        $driver = Driver::find($id);
        return view('headoffice.drivers.show', compact('driver'));
    }

    public function edit($id)
    {
        $driver = Driver::find($id);
        return view('headoffice.drivers.edit', compact('driver'));
    }

    public function update(Request $request, $id)
    {
        $driver = Driver::find($id);
        $driver->Name = $request->Name;
        $driver->License_No = $request->License_No;
        $driver->Contact_No = $request->Contact_No;
        $driver->save();

        return redirect()->route('drivers.index')->with('success', 'Driver updated successfully!');
    }

    public function destroy($id)
    {
        $driver = Driver::find($id);
        $driver->delete();

        return redirect()->route('drivers.index')->with('success', 'Driver deleted successfully!');
    }
}
