<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  	
	/**
	 * Login page
	 *
	 * @return void
	 */
	public function login(){
		return view('auth.login');
	}

}
