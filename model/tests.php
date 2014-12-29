<?php 
/**
* 
*/
class Tests extends Model
{

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