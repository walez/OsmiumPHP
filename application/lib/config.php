<?php //namespace lib;
/**
* Author: Irale Usman
*/
// class Config
// {
	
// 	public function __construct()
	// {
		ob_start();

		define('HOME',$_SERVER['HTTP_HOST'].'/osmium/');

		//database configuration
		define('DB_HOST','127.0.0.1');
		define('DB_USER','root');
		define('DB_NAME','cbt');
		define('DB_PASS','root');
		define('DB_TYPE','mysql');

		define('TEMPLATE','default');
		define('BASE_URL','http://localhost/new/');
		define('TEMPLATE_PATH',BASE_URL."application/public/templates/default/");
		define('DEVELOPMENT_ENVIRONMENT',true);
		define('DEFAULT_CONTROLLER','test');
		define('DEFAULT_ACTION','index');
		define('DS', DIRECTORY_SEPARATOR);
	// }
// }

 ?>