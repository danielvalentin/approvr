<?php namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {
	
	public function user()
	{
		return $this->belongsTo('App\Http\Models\User');
	}
	
	public function clients()
	{
		return $this->hasMany('App\Http\Models\User', 'clients_projects');
	}
	
	public function link()
	{
		return '<a href="/'.\Site::route('projects.prefix').'/'.$this->id.'">'.$this->name.'</a>';
	}

}
