<?php

class Pattern_ValueObject_PositiveTest extends PHPUnit_Framework_TestCase
{
	public function testTryIncorrectStringValue_Zero()
	{
		$expected = new Pattern_ValueObject_Positive('hello');
		$this->assertEquals($expected->getValue(), 0);
	}
	
	public function testTryPossibleValue_Integer()
	{
		
		$values = array(
			'5' => 5,
			'2.358' => 2,
			'3568sdfsdf' => 3568,
			329 => 329,
			32.656 => 32,
			false => 0,
			true => 1,
			-3239 => 0
		);
		
		foreach ($values as $key => $value) {
			$positive = new Pattern_ValueObject_Positive($key);
			$this->assertEquals($positive->getValue(), $value);
		}
	}
	
	public function testAdd_Integer()
	{
		$value = new Pattern_ValueObject_Positive(5);
		$expect = $value->add(10);
		$this->assertEquals($expect->getValue(), 15);
	}
	
	public function testPassByValue()
	{
		$value = new Pattern_ValueObject_Positive(5);
		
		$obj1 = $value;
		$obj2 = $value;
		
		$obj1 = $obj1->add(20);
		
		$this->assertEquals($obj1->getValue(), 25);
		$this->assertEquals($obj2->getValue(), 5);
	}
}
