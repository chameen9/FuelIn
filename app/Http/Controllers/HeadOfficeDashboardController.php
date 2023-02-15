<?php

namespace App\Http\Controllers;


use App\Models\Delivery;
use App\Models\FuelRequest;
use App\Models\User;
use App\Models\Order;
use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;


class HeadOfficeDashboardController extends Controller
{
    /**
     * Show the head office dashboard view.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $orders = Order::orderBy('Approval_Status','ASC')->get();   //use a join
        $email = Auth::user()->email;
        $FirstName = User::where('email',$email)->value('first_name');
        $LastName = User::where('email',$email)->value('last_name');
        $drivers = Driver::all();

        $fuelRequests = FuelRequest::all();
        $deliveries = Delivery::all();

        return view('headoffice.dashboard', compact(
            'fuelRequests', 
            'deliveries',
            'email',
            'FirstName',
            'LastName',
            'orders',
            'drivers' 
        ));
    }
    public function edit($id){
        $order = Order::find($id);
        $drivers = Driver::all();

        return redirect()->route('head_office.dashboard')->with(['order' => $order,'drivers'=>$drivers]);

    }
    public function editDecline($id){
        $order = Order::find($id);
        $drivers = Driver::all();

        return redirect()->route('head_office.dashboard')->with(['order' => $order,'drivers'=>$drivers]);

    }
    public function update(Request $request, $id){
        $request->validate([
            'driver_id' => 'required',
        ]);
        $email = Auth::user()->email;
        $userId = User::where('email',$email)->value('id');

        $order = Order::findOrFail($id);
        $order->Approval_Status = 'approved';
        $order->Approval_Date = Carbon::Now('Asia/Colombo');
        $order->Approval_By = $userId;
        $order->save();

        $delivery = new Delivery();
        $delivery->filling_station_id = $request->input('Fuel_Station_ID');
        $delivery->liters = $request->input('liters_quantity');
        $delivery->Fuel_Type_ID = $request->input('Fuel_Type_ID');
        $delivery->Fuel_Station_ID = $request->input('Fuel_Station_ID');
        $delivery->ordered_date = $request->input('ordered_date');
        $delivery->expected_filling_time = $request->input('ordered_date');
        $delivery->actual_filling_time = $request->input('ordered_date');
        $delivery->driver_id = $request->input('driver_id');
        $delivery->order_id = $request->input('order_id');
        $delivery->save();

        return redirect()->route('head_office.dashboard')->with('success', 'Order Approved !');
    }
    public function decline(Request $request, $id){

        $email = Auth::user()->email;
        $userId = User::where('email',$email)->value('id');

        $order = Order::findOrFail($id);
        $order->Approval_Status = 'declined';
        $order->Approval_Date = null;
        $order->Approval_By = $userId;
        $order->save();
        return redirect()->route('head_office.dashboard')->with('success', 'Order Declined !');
    }

    public function destroy($order_id){
        $order = Order::find($order_id);
        $order->delete();
    
        return redirect()->route('head_office.dashboard')
            ->with('success','Fuel Order deleted successfully');
    }


    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('/login');
    }
}
