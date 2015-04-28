<?php 
/**
* 
*/
require 'vendor/autoload.php';

class CalculatorTest extends PHPUnit_Framework_TestCase
{
	
	public function testAddNumbers()
	{

		$calc = new \models\Calculator;
		$this->assertEquals(4,$this->add(2,2));
		
	}
}


 ?>