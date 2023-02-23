<?php

namespace App\Http\Controllers;

use App\Models\Tokens;
use Illuminate\Http\Request;


class TokenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $tokens = Tokens::all();
        return view('fuel_station.tokens.index', compact('tokens','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('fuel_station.tokens.create',['request'=>$request]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $token = new Token;
        $token->Customer_ID = $request->Customer_ID;
        $token->Payment_Status_ID = $request->Payment_Status_ID;
        $token->Fuel_Type_ID = $request->Fuel_Type_ID;
        $token->Liters = $request->Liters;
        $token->Scheduled_Filling_Time = $request->Scheduled_Filling_Time;
        $token->Scheduled_Filling_Date = $request->Scheduled_Filling_Date;
        $token->request_id = $request->request_id;
        $token->save();

        return redirect()->route('tokens.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $token = Token::find($id);
        return view('tokens.show', ['token' => $token]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $token = Token::find($id);
        return view('tokens.edit', ['token' => $token]);
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
        $token = Token::find($id);
        $token->Customer_ID = $request->Customer_ID;
        $token->Payment_Status_ID = $request->Payment_Status_ID;
        $token->Fuel_Type_ID = $request->Fuel_Type_ID;
        $token->Liters = $request->Liters;
        $token->Scheduled_Filling_Time = $request->Scheduled_Filling_Time;
        $token->Scheduled_Filling_Date = $request->Scheduled_Filling_Date;
        $token->request_id = $request->request_id;
        $token->save();

        return redirect()->route('tokens.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $token = Token::find($id);
        $token->delete();

        return redirect()->route('tokens.index');
    }
}
