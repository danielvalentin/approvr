<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class UserController extends Controller {
	
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function login()
	{
		if($_POST)
		{
			$username = Input::get('username');
			$password = Input::get('password');
			$remember = Input::has('remember') ? true : false;
			$field = (strpos($username, '@') === false) ? 'username' : 'email';
			if(Auth::attempt( array($field => $username, 'password' => $password), $remember ))
			{
				Notes::success('You have been logged in.');
				if(Auth::logged('model'))
				{
					return redirect()->route('modelHome');
				}
				return Redirect::back();
			}
			else
			{
				Session::flash('loginError', 'Wrong username or password. Please try again');
			}
		}
		return view('user.login');
	}
	
	public function logout()
	{
		Auth::logout();
		Notes::info('You have been logged out.');
		if(URL::route('userIndex') == URL::previous())
		{
			return redirect()->route('frontpage');
		}
		return Redirect::back();
	}

	
	
	public function signup(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;
		return view('user.signup')->with('messages', $messages);
	}
	
	public function index()
	{
		return view('user.index');
	}
	
}
