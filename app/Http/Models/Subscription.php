<?php namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model {
	
	protected $table = 'subscriptions';
	public $timestamps = false;
	
	public function users()
	{
		return $this->belongsToMany('App\Http\Models\User', 'users_subscriptions');
	}
	
}
