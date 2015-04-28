<?php namespace lib;
use \PDO;
use \lib\Error as Error;
/**
* 
*/
class Database extends PDO
{
	
	function __construct($config = false)
	{
		$config = (!$config || $config != '') ? 
			$config = array(
							'db_host' => DB_HOST,
							'db_name' => DB_NAME,
							'db_user' => DB_USER,
							'db_pass' => DB_PASS,
							'db_type' => DB_TYPE
							) : $config;

		//database config
		$host = $config['db_host'];
		$name = $config['db_name'];
		$user = $config['db_user'];
		$pass = $config['db_pass'];
		$type = $config['db_type'];

		try {
			
			parent::__construct("$type:host=$host;dbname=$name", $user, $pass);
			$this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");
		} 
		catch (Exception $e) {
			
			Error::display($e);
		}


	}
}

 ?>