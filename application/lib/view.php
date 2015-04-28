<?php namespace lib;
/**
* 
*/


class View 
{
	
	public static function renderView($path, $data = false)
	{
		if(is_array($data)){

			extract($data);
		}

				require "application/views/$path.php";	
	}

	public static function renderTemplate($path, $data = false)
	{
		if(is_array($data)){

			extract($data);
		}
		require "application/pulic/templates/".TEMPLATE."/$path.php";

	}

	public static function renderTwigView($path, $data = array()){
		
		
		$loader = new \Twig_Loader_Filesystem('application/views/');	
		$twig = new \Twig_Environment($loader);

		echo $twig->render("$path.php", $data);
	}

	public static function renderTwigTemplate($path, $data = array()){
		
		$loader = new \Twig_Loader_Filesystem('application/public/templates/'.TEMPLATE."/");	
		$twig = new \Twig_Environment($loader);

		echo $twig->render("$path.php", $data);
	}
}
 ?>