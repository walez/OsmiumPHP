<?php 
/**
* sample model Class
*/
class Tests extends Model
{
	//specify table name
	public $table ='tests';
 	public function allTests(){
		$sql = "SELECT * FROM tests";
		$res = $this->_setSql($sql);

		$tests = $this->getRow();
		if (empty($tests))
		{
			return false;
		}
		return $tests;		
	}
}
 ?>