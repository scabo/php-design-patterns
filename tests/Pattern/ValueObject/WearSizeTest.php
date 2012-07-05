<?php

class Pattern_ValueObject_WearSizeTest extends PHPUnit_Framework_TestCase
{
	public function testTryIncorrectValue_NA()
	{
		$expected = new Pattern_ValueObject_WearSize('hello');
		$this->assertEquals($expected->getValue(), 'n/a');
	}
	
	public function testTryPossibleValue_String()
	{
		
		$values = 
			array(
				'N/a'=>'n/a',
				'xS'=>'xs',
				'S'=>'s',
				'M'=>'m',
				'l'=>'l',
				'Xl'=>'xl'
			);
		
		foreach ($values as $key => $value) {
			$positive = new Pattern_ValueObject_WearSize($key);
			$this->assertEquals($positive->getValue(), $value);
		}
	}
}
