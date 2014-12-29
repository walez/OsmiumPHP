<?php 
/**
* Router Class
*/
class Router{
	public $message;
	public static function dispatcher(){
		if(isset($_GET['page'])){
			$controller = $_GET['page'];
			}else{
				$controller = DEFAULT_CONTROLLER;
				
			}
			if(isset($_GET['action'])){
				$action = $_GET['action'];
			}else{
				$action ='index';
				
			}
			if(isset($_GET['params'])){
				$params = explode('/',$_GET['params']);
			}
			else{
				$params = array();
				}
			if(class_exists($controller)){
				if(method_exists($controller, $action)){
						
						$controller_obj = new $controller();
						$controller_obj->$action($params);
					}else{
						
						$message ="Undeclared method/Action:"."<br><b>".$action."</b>";
						Error::display($message);
					}
					
				
			}else{
						$message ="Undeclared Class/Controller:"."<br><b>".$controller."</b>";
						Error::display($message);
					}
	}
		public static function fallback(){
		//implement exolve cms routing here
		}
}
 ?>	