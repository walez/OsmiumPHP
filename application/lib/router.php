<?php namespace lib;

/**
* 
*/
class Router
{	

	
	public static function dispatch()
	{
	

		if(!empty($_GET['url'])){

		//get URL
		$uri = explode('/',$_GET['url']);
		$count = count($uri) - 1;
		$params = array();


		if($uri[0] && !empty($uri[0])){

			$controller = $uri[0];
		}

		if($count > 1 && !empty($uri[1])){

			$action = $uri[1];
		}
		else{

			$action = DEFAULT_ACTION;
		}

		if(!empty($uri[2])){

			for($i=2; $i<=$count; $i++){

			$params[] = $uri[$i];

			}
		}
		else{
			$params = array();
		}
		
		}
		else{

			$controller = DEFAULT_CONTROLLER;
			$action = DEFAULT_ACTION;
			$params = array();
		}
		
		$controller = '\controllers\\' .ucwords($controller);

		if(class_exists($controller)){
		
			$controller_obj = new $controller;

			if(method_exists($controller_obj, $action)){

				$controller_obj->$action($params);
				}
				else{
					
					$message ="Undeclared method/Action:"."<br><b>".$action."</b>";
					\lib\Error::display($message);
				}
		}else{

			$message ="Unknown Request"."<br><b>".$controller.'/'.$action."</b>";
						\lib\Error::display($message);
		}
		
		
	}


}
 ?>