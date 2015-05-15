<?php 
use \lib\Router as Router;
use \lib\Config as Config;


if(file_exists('vendor/autoload.php')) {

	require_once 'vendor/autoload.php';
}


if(file_exists('application/models/propel/generated-conf/config.php')) {
	
	require 'application/models/propel/generated-conf/config.php';
}


// initialise configuration class
new Config();

if(DEVELOPMENT_ENVIRONMENT === true) {

	ini_set('display_errors',1);
}
else{
	
	ini_set('display_errors',0);
}


Router::dispatch();
