<?php namespace lib;

/**
* 
*/
class Session
{
	private static $sessionStarted = false;

	public static function init()
	{
		if(self::sessionStarted === false)
		{ 
			session_start();
			self::$sessionStarted = true;
		}
	}

	public static function set($vals)
	{

		foreach ($vals as $key => $value) 
		{
			$_SESSION[$key] = $value;
		}

	}

	public static function get($key = false){

		if($_SESSION[$key] && !empty($_SESSION[$key])){

			return $_SESSION[$Key];
		}
	}

	public static function pull($key)
	{
		if(self::$sessionStarted === true && $key != false)
		{
			unset($_SESSION[$key]);
		}
	
	}

	public static function display()
	{
		if (!empty($_SESSION)) 
		{
			return $_SESSION;
		}
	}

	public static function destroy($key = false)
	{
		if(self::$sessionStarted === true && $key != false)
		{
			unset($_SESSION[$key]);
		}
		else
		{
			session_unset();
         	session_destroy();
		}

	}
}

 ?>