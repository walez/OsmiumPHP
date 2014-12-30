<?php 
/*
	OsmiumPHP
	Created By Irale Usman
	superirale@gmail.com
	https://github.com/superirale/OsmiumPHP
*/
/**
* Database connection class
*/
class Database{
	
	private static $db;

	public static function init() {
		try {

			self::$db = new PDO(DB_INFO, USER, PASS);
			self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			self::$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
			
		} catch (Exception $e) {
			
			die('Connection error: ' . $e->getMessage());
		}
		return self::$db;
	}
	


}
 ?>