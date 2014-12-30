<?php 
/**
* Sample Controller

*/


class Test extends Controller{
	// function __construct(){
	// 	
	// }
	
	function index(){	
		//setting data to be passed to the view
		$this->data['welcome']='Welcome to OsmiumPHP';
		$this->data['page_title'] ="Welcome";
		//passing data to the view
		View::render($this->data);
	}
		function backend($id)
	{	
		// View::render($this->data);
		echo "This is the backend";
		

	}
}
 ?>