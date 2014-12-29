<?php 
function __autoload($class){
	$class = strtolower($class);
	if(file_exists('core/'.$class.'.php')){
		include('core/'.$class.'.php');
	}
	if(file_exists('controller/'.$class.'.php')){
		include_once('controller/'.$class.'.php');
	}
	if(file_exists('model/'.$class.'.php')){
		include_once('model/'.$class.'.php');
	}
}
 ?>