<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class DriverController extends Controller
{
    /**
     * Display a listing of the drivers.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $email = Auth::user()->email;
        $FirstName = User::where('email',$email)->value('first_name');
        $LastName = User::where('email',$email)->value('last_name');
        $drivers = Driver::all();
        return view('headoffice.drivers.index', compact('drivers','email','FirstName','LastName'));
    }

    /**
     * Show the form for creating a new driver.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('headoffice.drivers.create');
        //no need handle by modal
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

        $driver = new Driver();
        $driver->first_name = $request->get('first_name');
        $driver->last_name = $request->get('last_name');
        $driver->driver_license_number = $request->get('driver_license_number');
        $driver->phone_number = $request->get('phone_number');
        $driver->address = $request->get('address');
        $driver->date_of_birth = $request->get('date_of_birth');
        $driver->created_at = Carbon::Now('Asia/Colombo');
        $driver->updated_at = Carbon::Now('Asia/Colombo');
        $driver->save();
        

        $user = new User();
        $user->first_name = $request->get('first_name');
        $user->last_name = $request->get('last_name');
        $user->email = strtolower($request->get('first_name')).''.strtolower($request->get('last_name')).'@fuelin.lk';
        $user->password = $request->get('driver_license_number');
        $user->user_type_id = 2;
        $saved = $user->save();
        if  ($saved){
            return redirect('/drivers')->with('success', 'Driver & user has been added');
        }
        else{
            return redirect('/drivers')->with('success', 'Driver has been added add this driver as an user manually.');
        }
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
        return redirect()->route('drivers.index')->with(['driver' => $driver]);
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
        return redirect()->route('drivers.index')->with(['updatedriver' => $driver]);
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
        $driver->updated_at = Carbon::Now('Asia/Colombo');
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
