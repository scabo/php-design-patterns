<?php

final class Pattern_ValueObject_Positive 
	extends Pattern_ValueObject_Abstract 
{
	public function Pattern_ValueObject_Positive($value)
	{
		parent::Pattern_ValueObject_Abstract($value);
	}
	
	public function add($value)
	{
		$value = (int)$value + $this->_value;
		return new Pattern_ValueObject_Positive($value);
	}
	
	public function check($value)
	{
		$value = (int)$value;
		return ($value <= 0) ? 0 : $value;
	}
}