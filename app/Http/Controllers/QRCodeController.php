<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QRCodeController extends Controller
{
  public function homeView(Request $request){

    $code = strval($request->token_id);
    
    return View('customers.qrcode',compact('code'));
  }
}
