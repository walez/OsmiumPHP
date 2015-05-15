<?php 
namespace lib;


class Controller
{
	public $data;
	
	function __construct()
	{
		$this->data = array();
		$this->data['base_path'] = TEMPLATE_PATH;
	}
}
