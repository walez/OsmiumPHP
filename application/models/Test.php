<?php 
namespace models;

class Test extends \lib\Model
{
	
	public function allTests(){

		$sql = "SELECT * FROM question";
		$res = $this->_setSql($sql);

		$tests = $this->getRow();

		if (empty($tests)){

			return false;
		}

		return $tests;
		
	}
}