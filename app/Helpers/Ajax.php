<?php namespace App\Helpers;
 
/**
 * Helper for easier ajax replies
*/
abstract class Ajax {
	
	public static function redirect($url, $msg = false)
	{
		self::doit(true, 'redirect', $msg, array('url' => $url));
	}
	
	public static function error($msg, $more = array())
	{
		self::doit(false, 'error', $msg, $more);
	}
	
	public static function success($msg = '', $more = array())
	{
		self::doit(true, 'success', $msg, $more);
	}
	
	public static function info($msg, $more = array())
	{
		self::doit(true, 'info', $msg, $more);
	}
	
	private static function doit($success, $type, $msg = '', $more = array())
	{
		$values = array(
			'success' => $success,
			'type' => $type,
			'message' => $msg,
		);
		$reply = array_merge($values, $more);
		die(json_encode($reply));
	}
	
}