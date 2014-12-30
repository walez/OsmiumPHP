<?php
/*
	OsmiumPHP
	Created By Irale Usman
	superirale@gmail.com
	https://github.com/superirale/OsmiumPHP
*/
define('HOME',$_SERVER['HTTP_HOST'].'/osmium/');
define('DB_INFO','mysql:host=; dbname=');
define('USER','root');
define('PASS','root');
define('THEME','default');
define('BASE_URL','public/theme/'.THEME.'/');
define('THEME_PATH','public/theme');
define('DEVELOPMENT_ENVIRONMENT',true);
define('DEFAULT_CONTROLLER','test');
define('DEFAULT_ACTION','index');

define('DS', DIRECTORY_SEPARATOR);

?>