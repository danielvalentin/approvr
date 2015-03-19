<?php namespace App\Helpers;

abstract class Site {
	
	public static function redirect($route = 'frontpage', $parameters = array(), $hash = '')
	{
		$to = route($route, $parameters).$hash;
		return redirect($to);
	}
	
	public static function route($parts = '')
	{
		$path = 'routes';
		$parts = explode('.',$parts);
		if(!empty($parts)) foreach($parts as $part)
		{
			$path .= '.'.$part;
		}
		return trans($path);
	}
	
}
