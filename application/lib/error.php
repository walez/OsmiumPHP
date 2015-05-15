<?php 
namespace lib;

/*
	OsmiumPHP
	Created By Irale Usman
	superirale@gmail.com
	https://github.com/superirale/OsmiumPHP
*/

class Error
{
	public $msg;

	public static function display($msg) {

		echo '<pre>';
		print_r($msg);
		echo '</pre>';
	}
}
