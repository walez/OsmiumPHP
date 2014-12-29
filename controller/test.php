<?php 
/**
* 
*/


class Test extends Controller{
	// function __construct(){
	// 	$this->
	// }
	
	function index(){	
		$test_model =new Tests();
		$all = $test_model->allTests();
		// var_dump($all);exit();
		$this->data['all'] = $all['id'] ;
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