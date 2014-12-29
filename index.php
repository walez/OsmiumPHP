<?php 
require 'core/config.php';
require 'core/autoload.php';
// call the dispatcher
if(DEVELOPMENT_ENVIRONMENT == true){
	
	error_reporting(E_ALL);
}else{
	error_reporting(0); 
}
 Router::dispatcher();
 ?>