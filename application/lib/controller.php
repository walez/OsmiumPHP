<?php namespace lib;

use lib\config as Config;

class Controller
{
	public $data;
	
	function __construct()
	{
		$this->data = array();
		$this->data['base_url'] = TEMPLATE_PATH;
	}
}



 ?>