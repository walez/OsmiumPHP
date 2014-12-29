<?php 
/**
* View super class
*/
class View{
	
	public static function render($data=NULL,$theme=NULL){
		if(!is_null($data)){
			extract($data);
			}
			(!is_null($theme))?$theme = $theme : $theme = THEME;
			
			(isset($_GET['page'])) ?  $controller = $_GET['page']  : $controller = DEFAULT_CONTROLLER;
			
			(isset($_GET['action'])) ? $action =  $_GET['action'] : $action ='index';
			
			
		$file =  'view'.DS . $controller . DS . $action . '.php';

		ob_start();
		include(THEME_PATH.DS.$theme.DS.'header.php');
		include($file);
		include(THEME_PATH.DS.$theme.DS.'footer.php');
		$header =ob_get_contents();
		$view = ob_get_contents();
		ob_end_clean();
		echo $view;
		}
		public static function getPath($path){
			$path =BASE_URL.$path;
			(isset($_GET['action']))? $path = '../'.$path: $path =$path;
			// (isset($_GET['params']))? $path = '../'.$path: $path =$path;
		if(isset($_GET['params'])){
			$count = explode('/',$_GET['params']);
			foreach ($count as $cnt){
				$path = '../'.$path;
			}
		}


			return $path;
		}

}
 ?>