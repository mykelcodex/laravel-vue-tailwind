<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
  
	public function pay(){
		return view('payments.index');
	}

}
