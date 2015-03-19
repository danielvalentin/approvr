<?php namespace App\Traits;

use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

trait AuthenticatesAndRegistersAppUsers {
	
	use AuthenticatesAndRegistersUsers;
	
	public function getRegister()
	{
		return view('auth.register');
	}
	
	public function getLogin()
	{
		return view('user.login');
	}
	
}
