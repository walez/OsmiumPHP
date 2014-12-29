<?php 
/**
* 
*/


class Test extends Controller{
	// function __construct(){
	// 	$this->
	// }
	
	function index(){	
	
		$this->data['name']='usman';
		$this->data['lname']='Irale';
		
		View::render($this->data);
	}
		function backend($id)
	{	
		// View::render($this->data);
		echo "This is the backend";
		

	}
}
 ?>