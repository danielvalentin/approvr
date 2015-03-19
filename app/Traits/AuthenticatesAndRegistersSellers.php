<?php namespace App\Traits;

use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

trait AuthenticatesAndRegistersSellers {
	
	use AuthenticatesAndRegistersUsers;
	
	public function getRegister()
	{
		return view('seller.signup');
	}
	
}
