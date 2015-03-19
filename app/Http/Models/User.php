<?php namespace App\Http\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

use Illuminate\Support\Str;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	protected $table = 'users';
	protected $fillable = ['name', 'email', 'password'];

	protected $hidden = ['password', 'remember_token'];
	
	public function subscription()
	{
		return $this->hasOne('App\Http\Models\Subscription', 'users_subscriptions');
	}
	
	public function clients()
	{
		return $this->hasMany('App\Http\Models\User', 'users_clients', 'user_id', 'client_id');
	}
	
	public function roles()
	{
		return $this->belongsToMany('App\Http\Models\Role', 'users_roles');
	}
	
	public function projects()
	{
		return $this->hasMany('App\Http\Models\Project');
	}

	public function hasRole($role = false)
	{
		if(!$role) return false;
		return (bool)$this->roles()->where('name','=',$role)->first();
	}
	
	public function assignRole($role)
	{
		if(gettype($role) == 'string')
		{
			$role = Role::whereName($role)->first();
		}
		return $this->roles()->attach($role);
	}
	
	public function possessiveName()
	{
		$name = $this->name;
		if(Str::endsWith($name,'s'))
		{
			$name .= "'";
		}
		else
		{
			$name .= "'s";
		}
		return $name;
	}

}
