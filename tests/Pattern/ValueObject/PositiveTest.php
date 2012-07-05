<?php

class Pattern_ValueObject_PositiveTest extends PHPUnit_Framework_TestCase
{
	public function testTryIncorrectStringValue_Zero()
	{
		$expected = new Pattern_ValueObject_Positive('hello');
		$this->assertEquals($expected->getValue(), 0);
	}
}
